<?php

/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

if (!defined('NV_SYSTEM')) {
	die('Stop!!!');
}
define('NV_IS_MOD_REPORT', true);

if (!defined('NV_IS_USER')) {
	nv_redirect_location($global_config['site_url'] . '/users/login/', 301, true);
}
require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';

/**
 *  Khởi tạo cache các giá trị sử dụng chung
 */
//Lấy thông tin toàn bộ user, key là code
$array_code_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name, t2.group_id FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != ""';
$array_code_users = $nv_Cache->db($_sql, 'code', $module_name, '', 86400 * 30);

//Lấy thông tin cá nhân nhân viên, key là userid
$array_infor_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name, t2.group_id FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != "" ';
$array_infor_users = $nv_Cache->db($_sql, 'userid', $module_name, '', 86400 * 7);

//Lấy thông tin các nhóm (các nhóm đang có trưởng nhóm)
$array_group_info = [];
$_sql = 'SELECT t1.group_id, t1.title, t2.userid as leader_id FROM ' . $db_config['prefix'] . '_users_groups_detail as t1 INNER JOIN ' . $db_config['prefix'] . '_users_groups_users as t2 ON t1.group_id = t2.group_id WHERE t1.group_id > 12 and t2.is_leader = 1';
$array_group_info = $nv_Cache->db($_sql, 'group_id', $module_name, '', 0);

/**
 * Lấy thông tin nhóm các leader -> Lưu cache 
 * Result: Array[group_id] = [userid,code];
 */
$array_leader = [];
$_sql = 'SELECT t1.userid,t2.code FROM ' . $db_config['prefix'] . '_users_groups_users as t1 INNER JOIN ' . $db_config['prefix'] . '_users_info as t2 ON t1.userid = t2.userid WHERE t1.is_leader = 1 AND t1.group_id > 6 ORDER BY t1.group_id DESC'; //Chỉ lấy trưởng nhóm
$array_leader = $nv_Cache->db($_sql, 'group_id', $module_name, '', 86400 * 7);


/**
 * Lấy danh sách nhân sự của từng Team -> Lưu cache 
 * Result: Array[group_id][userid] = code;
 */

$array_team_users = [];
$_sql = 'SELECT userid,group_id FROM ' . $db_config['prefix'] . '_users_groups_users WHERE is_leader = 0 ORDER BY group_id DESC'; //Không lấy trưởng nhóm
$_list = $nv_Cache->db($_sql, '', $module_name, '', 86400 * 1);

$cache_file = NV_LANG_DATA . '_array_team_users.cache';
if ($nv_Cache->getItem($module_name, $cache_file) == false) {
	foreach ($_list as $values) {
		$values['code'] = $array_infor_users[$values['userid']]['code'];
		$array_team_users[$values['group_id']][$values['userid']] = $values['code'];
	}
	$cache = serialize($array_team_users);
	$set_cache = $nv_Cache->setItem($module_name, $cache_file, $cache, 86400 * 7);
} else {
	$array_team_users = unserialize($nv_Cache->getItem($module_name, $cache_file));
}
// echo displayArray($array_team_users);
// die();

//Lấy danh sách code nhân viên cấp dưới mình quản lý
if (defined('NV_IS_MODADMIN')) {
	$level = 1; //ASM, Administrator
	$codes_in_team = '';
} elseif ($leader_team > 0) {
	$level = 2; //Team Manager
	$codes_in_team = $array_team_users[$user_info['group_id']];
} else {
	$level = 3; //sale
	$codes_in_team = $array_infor_users[$user_info['userid']]['code'];
}

//** Hết khởi tạo Cache */


/**
 * XUẤT FILE EXCEL BÁO CÁO BÁN HÀNG
 */

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

function export_dailyreport($array_data, $total_sheet = 0, $total_by_team = 0)
{
	global $module_name, $lang_module, $user_info, $array_group_info;
	$objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(NV_ROOTDIR . '/modules/report/dailyreport.xlsx');

	//Xuất dữ liệu tại Sheet 1
	$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

	$file_folder_path = NV_ROOTDIR . "/" . NV_TEMP_DIR . "/" . $module_name . "/";
	$username = $user_info['username']; //tên team hoặc tên sale
	$file_name_export = 'dailyreport_' . $username . '.xlsx';
	$file_export_tmp = $file_folder_path . $file_name_export;

	//Kiểm tra thư mục chứa file tạm
	if (!file_exists($file_folder_path)) {
		$error = $lang_module['export_error_fileexists'];
		mkdir($file_folder_path);
	}
	//Xóa các file tạm cũ đi tránh trùng
	if (file_exists($file_export_tmp)) {
		$check = nv_deletefile($file_export_tmp, true);
		if ($check[0] != 1) {
			$error = $check[1];
		}
	}

	// $objWorksheet->setCellValue('F5', "Room");
	// $objWorksheet->setCellValue('B1', "Time");
	// $objWorksheet->getStyle('A1:B1')->applyFromArray($table_head);

	//Lấy danh sách các Trường chứa dữ liệu để fill
	$arr_label = get_field_extract(get_field_rows());
	// fill label
	$c = 6;
	$r = 4;
	foreach ($arr_label as $key => $parent_label) {
		$objWorksheet->setCellValueByColumnAndRow($c, $r, $lang_module[$key]);
		// $objWorksheet->setCellValue('A' . $r, "[" . $room_array[$roomid]['type'] . "] \n" . $room_array[$roomid]['name']);
		// $objWorksheet->mergeCells('A' . $r . ':A' . ($r + 1));
		foreach ($parent_label as $sub_label) {
			$objWorksheet->setCellValueByColumnAndRow($c, $r + 1, $lang_module[$sub_label]);
			// $objWorksheet->getStyle(col_name($c) . $r)->applyFromArray($table_head);
			$objWorksheet->getStyleByColumnAndRow($c, $r + 1)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
			$objWorksheet->getStyleByColumnAndRow($c, $r + 1)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
			$objWorksheet->getColumnDimensionByColumn($c)->setAutoSize(true);
			$c++;
		}
	}

	//Fill dữ liệu
	$r = 5;
	$num = 0;

	foreach ($array_data as $row) {
		$num++;
		$r++;
		$c = 1;
		$list_ignore = ['id', 'team', 'sale_name'];
		// $list_accepted = ['pl_app', 'pl_loan', 'dn_app', 'dn_loan', 'xstu_check', 'xstu_app', 'xstu_loan', 'ipp_app', 'ipp_loan', 'banca_hd', 'banca_sale', 'ubank_app', 'ubank_loan', 'courier_lead', 'courier_app', 'courier_loan', 'credit_app ', 'credit_loan'];
		$objWorksheet->setCellValueByColumnAndRow($c, $r, $num); //Thứ tự
		$objWorksheet->setCellValueByColumnAndRow($c + 1, $r, $row['team']); //Team
		$objWorksheet->setCellValueByColumnAndRow($c + 2, $r, $row['sale_name']); //Sale name
		$c = 4;
		foreach ($row as $label => $value) {
			if (in_array($label, $list_ignore)) {
				continue;
			}
			if ($label == 'date') {
				$value = nv_date('d/m/Y', $value);
			}
			$objWorksheet->setCellValueByColumnAndRow($c, $r, $value);
			$c++;
		}
	}

	//Tính tổng từng DSA ở Sheet 2
	if ($total_sheet) {
		$total_by_code = []; //Tính tổng cho từng nhân viên
		$list_ignore2 = ['id', 'code', 'date', 'team', 'sale_name', 'action_note'];
		foreach ($array_data as $row) {
			if (empty($total_by_code[$row['code']]['id'])) {
				$total_by_code[$row['code']] = $row;
			} else {
				foreach ($row as $label => $value) {
					if (in_array($label, $list_ignore2)) {
						continue;
					}
					$total_by_code[$row['code']][$label] = empty($total_by_code[$row['code']][$label]) ? $value : $total_by_code[$row['code']][$label] + $value;
				}
			}
		}

		//Ghi dữ liệu
		$objWorksheetTotal = $objPHPExcel->setActiveSheetIndex(1);
		$r = 5;
		$num = 0;
		foreach ($total_by_code as $code => $_row) {
			$r++;
			$num++;
			$c = 1;
			$objWorksheetTotal->setCellValueByColumnAndRow($c, $r, $num); //Thứ tự
			$objWorksheetTotal->setCellValueByColumnAndRow($c + 1, $r, $_row['team']); //Team 
			$objWorksheetTotal->setCellValueByColumnAndRow($c + 2, $r, $_row['sale_name']); //Sale name
			$objWorksheetTotal->setCellValueByColumnAndRow($c + 3, $r, $code); //Sale code
			$c = 5;
			foreach ($_row as $label => $value) {
				if (in_array($label, $list_ignore2)) {
					continue;
				}
				$c++;
				$objWorksheetTotal->setCellValueByColumnAndRow($c, $r, $value);
			}
		}
	}

	//Tính tổng theo Team ở Sheet 3
	if ($total_by_team) {
		//Ghi dữ liệu
		$objWorksheetTotal = $objPHPExcel->setActiveSheetIndex(2);
		$r = 6;
		$c = 2;
		foreach ($array_group_info as $_group_id => $_group) {
			//Ghi danh sách các team vào cột Team
			$objWorksheetTotal->setCellValueByColumnAndRow($c, $r, $_group['title']); //Tên Team
			$r++;
		}
	}

	$objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');
	$objWriter->save($file_export_tmp); //lưu vào file tạm trên server

	// Download file
	$download = new NukeViet\Files\Download($file_export_tmp, NV_ROOTDIR . "/" . NV_TEMP_DIR, $file_name_export);
	$download->download_file();
	exit();
}

/**
 * Xuất Nội dung Block trạng thái report của nhân viên cho ASM
 */
function check_report_static_area()
{
	global $module_data, $db, $array_code_users, $array_group_info, $array_team_users, $array_infor_users;

	$from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	$to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	$where = ' WHERE date >= ' . $from_time . ' AND date <= ' . $to_time;

	$_sql = "SELECT code FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows " . $where;
	$_query = $db->query($_sql);

	$result_team = [];
	while ($_row = $_query->fetch()) {
		// echo $_row['code'] . '-';
		$team_id = $array_code_users[$_row['code']]['group_id'];
		$result_team[$team_id]['num_sale'] = empty($result_team[$team_id]['num_sale']) ? 1 : $result_team[$team_id]['num_sale'] + 1;
	}

	$teams = [];
	foreach ($array_group_info as $group_id => $row) {
		$teams[$group_id]['total'] = count($array_team_users[$group_id]); //tổng số sale trong nhóm
		$teams[$group_id]['num_sale'] = empty($result_team[$group_id]['num_sale']) ? 0 : $result_team[$group_id]['num_sale']; //số sale đã báo cáo
		$teams[$group_id]['percent'] =  number_format($teams[$group_id]['num_sale'] / $teams[$group_id]['total'], 2, '.', ',') * 100; //Tỉ lệ %

		if (empty($teams[$group_id]['title'])) {
			$teams[$group_id]['leader_name'] = displayName($array_infor_users[$row['leader_id']]);
			$teams[$group_id]['title_group'] = $row['title'];
		}
	}
	return $teams;
}

/**
 * Xuất nội dung Block trạng thái Report cho từng team
 */
function check_report_static_team($level = 2)
{
	global $module_data, $db, $array_team_users, $leader_team, $user_info;

	$from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	$to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	$where = ' WHERE date >= ' . $from_time . ' AND date <= ' . $to_time;
	if ($level == 2) {
		$arr_list_code = $array_team_users[$leader_team];
		$where .= ' AND code IN ("' . implode('","', $arr_list_code) . '")';
	} else {
		$where .= ' AND FALSE'; // Chỉ buil cho Team Manager;
	}
	$_sql = "SELECT code FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows " . $where;
	$_query = $db->query($_sql)->fetchAll();
	$arr_was_report = array_column($_query, 'code'); //mảng các code đã báo cáo

	$sale_not_report = array_diff($arr_list_code, $arr_was_report);

	return $sale_not_report;
}

/**
 * Lấy nội dung action Note
 */
function get_action_note($userid, $for_display = 1, $date = 0)
{
	global $array_infor_users, $module_data, $db, $module_name, $leader_team;
	//ACTION_NOTE
	if (empty($date)) {
		$from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
		$to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	} else {
		$from_time = mktime(0, 0, 0, intval(date("m", $date)), intval(date("d", $date)), intval(date("Y", $date)));
		$to_time = mktime(23, 59, 59, intval(date("m", $date)), intval(date("d", $date)), intval(date("Y", $date)));
	}

	$where = ' date >= ' . $from_time . ' AND date <= ' . $to_time;
	$where .= " AND code = '" . $array_infor_users[$userid]['code'] . "'";

	$_sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_actions WHERE " . $where;
	$_action = $db->query($_sql)->fetch();

	if (empty($_action)) {
		$_action = [];
		$_action['note'] = '';
		if ($for_display and $leader_team >= 1) {
			$link_add_action = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=action-note';
			$_action['note'] = '<div class="text-center"> <a href="' . $link_add_action . '" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"> Add Action Note </i> </a> </div>';
		}
	} else {
		$_action['note'] = nv_nl2br(nv_htmlspecialchars($_action['note']), '</br>');
	}

	return $_action['note'];
}
/**
 * Hiển thị số liệu tổng theo ngày cho block thống kê
 */
function render_data_total($type = 'month', $arr_codes = array())
{
	global $db, $module_data;

	if ($type == 'month') {
		$from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), 1, intval(date("Y", NV_CURRENTTIME)));
		$to_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)) + 1, 1, intval(date("Y", NV_CURRENTTIME)));
	} else {
		$from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
		$to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
	}
	$where = 'date >= ' . $from_time . ' AND date <= ' . $to_time;

	if (is_array($arr_codes)) {
		$listcode = implode('","', $arr_codes);
		$where .= ' AND code IN ("' . $listcode . '")';
	} elseif (!empty($arr_codes)) {
		$where .= ' AND code = "' . $arr_codes . '"';
	}

	$db->sqlreset()
		->select('*')
		->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows')
		->where($where)
		->order('id DESC');
	$sth = $db->prepare($db->sql());
	$sth->execute();

	$fields = get_field_rows();
	$totals = [];
	while ($view = $sth->fetch()) {
		foreach ($fields as $key => $_field) {
			$totals[$_field] = empty($totals[$_field]) ? 0 + $view[$_field] : $totals[$_field] + $view[$_field];
		}
	}
	$totals_field = [];
	//Tách riêng tổng theo từng Sản phẩm
	foreach ($totals as $key => $_value) {
		$_field = explode('_', $key);
		$totals_field[$_field[0]][$_field[1]] = empty($totals_field[$_field[0]][$_field[1]]) ? 0 + $_value : $totals_field[$_field[0]][$_field[1]] + $_value;
	}

	return $totals_field;
}
