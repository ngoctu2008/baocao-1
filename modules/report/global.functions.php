<?php

/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

if (!defined('NV_MAINFILE')) {
	exit('Stop!!!');
}
global $module_name, $nv_Cache;

/**
 * Kiểm tra chức vụ, nếu là leader thì trả lại leader_team = group_id làm leader
 * $leader_team = 0 nếu không phải leader
 */
//Kiểm tra chức vụ, lấy thông tin
$leader_team = 0;
$is_leader_group = array();
$_sql = 'SELECT is_leader, group_id FROM ' . $db_config['prefix'] . '_users_groups_users where userid = ' . $user_info['userid'] . ' ORDER BY time_approved DESC';
$check_leader = $nv_Cache->db($_sql, '', $module_name, '', 86400);

if (!empty($check_leader)) {
	foreach ($check_leader as $value) {
		if ($value['is_leader'] == 1) {
			$leader_team = $value['group_id']; //lấy group_id mới nhất làm leader, tránh trường hợp chuyển team mà chưa hạ cấp ở team cũ
			break;
		}
	}
}
//Kiểm tra xem user có nằm trong các nhóm cấp Admin không (1,2,3)
foreach ($user_info['in_groups'] as $_group) {
	if ($_group <= 3 and !defined('NV_IS_MODADMIN')) {
		define('NV_IS_MODADMIN', true);
		break;
	}
}

//Định nghĩa các trường chứa dữ liệu
$list_field_accepted = ['pl', 'dn', 'xstu', 'ipp', 'banca', 'ubank', 'courier', 'credit', 'smartpos', 'vpbank', 'sfc', 'fe'];

//Giới hạn số ngày được sửa lại báo cáo, tính cả ngày hiện tại
$date_limit = 3;

/**
 * BEGIN KPI, TARGET
 * Khởi tạo KPI, Target
 * Tính toán %KPI đạt được, %Target đạt được của User
 */
$kpi = ['pl' => 25, 'dn' => 15, 'xstu' => 15, 'ipp' => 15, 'banca' => 10, 'ubank' => 5, 'courier' => 5, 'credit' => 10, 'smartpos' => 0]; //đơn vị %
$target = ['pl' => 5, 'dn' => 3, 'xstu' => 4, 'ipp' => 0, 'banca' => 10000000, 'ubank' => 5, 'courier' => 5, 'credit' => 0, 'smartpos' => 0];

if (defined('NV_IS_MODADMIN')) {
	$personal_ratio = 15 * 8; //Nếu là ASM x 8 team x 15 sale/team
} elseif ($leader_team > 0) {
	$personal_ratio = 15; //Nếu là Team leader x 15 sale/Team
} else {
	$personal_ratio = 1; //Nếu là sale
}
foreach ($list_field_accepted as $key) {
	$kpi[$key] = empty($kpi[$key]) ? 0 : $kpi[$key] * $personal_ratio;
	$target[$key] = empty($target[$key]) ? 0 : $target[$key] * $personal_ratio;
}

/**
 * Tính Tổng số %KPI các nghiệp vụ đang bán của user (Nghiệp vụ có Target >0)
 * Input: Array(KPI), Array(Target)
 * Output: Number(total KPI)
 */
function cal_total_kpi_reality($kpi, $target)
{
	$total = 0;
	foreach ($kpi as $key => $value) {
		if ($target[$key] != 0) {
			$total += $value;
		}
	}
	return $total;
}

// Tính số %Target đạt được
function cal_target_percent($total, $target = 1)
{
	if ($target == 0) {
		return 0;
	} else {
		return number_format($total / $target, 2) * 100;
	}
}
//Tính tỉ trọng KPI Revised
function cal_kpi_revised($kpi, $total_kpi_reality)
{
	return number_format($kpi / $total_kpi_reality, 3) * 100;
}
//Tính số %KPI thực đạt
function cal_kpi_percent($target_percent, $kpi_revised)
{
	return number_format(($target_percent * $kpi_revised) / 100, 2);
}


/**
 *  Get Config Module 
 */
$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
$result = $db->query($sql);
while (list($c_config_name, $c_config_value) = $result->fetch(3)) {
	$array_config[$c_config_name] = $c_config_value;
}
$time_over = explode('-', $array_config['valid_time']);

/**
 * Get_field_rows()
 * Lấy tên các nghiệp vụ từ các trường trong csdl => đẩy vào mảng 
 * example: [pl_app, pl_loan, dn_app, dn_loan]
 */
function get_field_rows()
{
	global $db, $module_data, $list_field_accepted;
	$fields = array();
	$_sql = "SHOW COLUMNS FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows LIKE '%\_%'";
	$_query = $db->query($_sql);
	// echo $_sql;
	while ($_row = $_query->fetch()) {
		$field_full = explode('_', $_row['field']);
		if (in_array($field_full[0], $list_field_accepted)) {
			// echo "<br>Field name: " . $field_full[0];
			$fields[] = $_row['field'];
		}
	}
	return $fields;
}

/** 
 *  Get_field_extract($field_array)
 * Lấy tên các trường chứa số liệu nghiệp vụ -> mảng 
 * Example: pl[app,loan], dn[app,loan],...
 */
function get_field_extract($field_array)
{
	$arr_label = [];
	foreach ($field_array as $key) {
		$_field = explode('_', $key);
		$arr_label[$_field[0]][] = $_field[1];
	}
	return $arr_label;
}

function check_number($value)
{
	$return = false;
	if (is_numeric($value)) {
		$return = true;
	}
	return $return;
}

function displayArray($array, $tab = '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp', $indent = 0)
{
	$curtab = "";
	$returnvalues = "";
	foreach ($array as $key => $value) {
		for ($i = 0; $i < $indent; $i++) {
			$curtab .= $tab;
		}
		if (is_array($value)) {
			$returnvalues .= "$curtab$key : Array: <br />$curtab{<br />\n";
			$returnvalues .= displayArray($value, $tab, $indent + 1) . "$curtab}<br />\n";
		} else {
			$returnvalues .= "$curtab$key => $value<br />\n";
		}
		$curtab = null;
	}
	return $returnvalues;
}

function displayName($arraydata)
{
	$fullname = $arraydata['last_name'] . ' ' . $arraydata['first_name'];
	return $fullname;
}

function stop($string = '')
{
	exit($string);
}
