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



/** XUẤT FILE EXCEL */

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

function export_dailyreport($array_data)
{
    global $module_name, $lang_module, $user_info;
    $objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(NV_ROOTDIR . '/modules/report/dailyreport.xlsx');
    $objWorksheet = $objPHPExcel->getActiveSheet();

    $file_folder_path = NV_ROOTDIR . "/" . NV_TEMP_DIR . "/" . $module_name . "/";
    $username = $user_info['username']; //tên team hoặc tên sale
    $file_name_export = 'dailyreport_' . $username . '.xlsx';
    $file_export_tmp = $file_folder_path . $file_name_export;

    //Kiểm tra thư mục chứa file tạm
    if (!file_exists($file_folder_path)) {
        $error = $lang_module['export_error_fileexists'];
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

    $r = 5;
    $num = 0;

    foreach ($array_data as $row) {
        $num++;
        $r++;
        $c = 1;
        $list_ignore = ['id', 'team', 'sale_name'];
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

    $objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');
    $objWriter->save($file_export_tmp); //lưu vào file tạm trên server

    // Download file
    $download = new NukeViet\Files\Download($file_export_tmp, NV_ROOTDIR . "/" . NV_TEMP_DIR, $file_name_export);
    $download->download_file();
    exit();
}
