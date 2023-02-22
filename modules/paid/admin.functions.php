<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Tuấn Phạm <tuanpb1988@gmail.com>
 * @Copyright (C) 2023 Tuấn Phạm. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 15 Feb 2023 15:38:52 GMT
 */

use LDAP\Result;

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
	die('Stop!!!');
}

define('NV_IS_FILE_ADMIN', true);

$allow_func = ['main', 'import'];

function get_fields()
{
	$fields = ['FV_ASSIGNED_TO', 'EXT_APP_ID', 'C_SCHEME',  'DPD', 'ALLOCATIONDATE', 'INSTALLMENT_AMT'];
	return $fields;
}

//Chuyển đổi thời gian
function convert_date($string)
{
	if (preg_match('/([0-9]{2})\-([a-zA-Z]{3})\-([0-9]{2})\s([0-9]{2})\.([0-9]{2})\.([0-9]{2})\.([0-9]{0,6})\s(PM|AM)/ui', $string, $a)) {
		// $result = ($a[1] . '-' . $a[2] . '-' .   $a[3] . ' ' . $a[4] . '.' . $a[5] . '.' . $a[6] . ' ' . $a[8]);
		$result = strtotime($a[1] . '-' . $a[2] . '-' .   $a[3] . ' ' . $a[4] . '.' . $a[5] . '.' . $a[6] . ' ' . $a[8]); //d-m-y h.m.s
	} else {
		$result = '';
	}
	return $result;
}

//Lấy code từ email
function check_user($data)
{
	global $db;
	$stmt = $db->prepare('SELECT t2.code FROM ' . NV_USERS_GLOBALTABLE . ' as t1 LEFT JOIN ' . NV_USERS_GLOBALTABLE . '_info as t2 ON t1.userid = t2.userid WHERE email= :email limit 1');
	$stmt->bindParam(':email', $data, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchColumn();
	if (!empty($result)) {
		return $result;
	}
	return '';
}

//Kiểm tra mã hợp đồng
function check_app_id($data)
{
	global $db;
	$stmt = $db->prepare('SELECT id FROM ' . NV_MOD_TABLE . '_row WHERE ext_app_id= :ext_app_id limit 1');
	$stmt->bindParam(':ext_app_id', $data, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchColumn();
	if (!empty($result)) {
		return $data;
	}
	return '';
}

//Kiểm tra - Chuyển đổi dữ liệu
function check_data($field, $data)
{
	if ($field == 'ALLOCATIONDATE') {
		return convert_date($data);
	} else if ($field == 'FV_ASSIGNED_TO') {
		return check_user($data);
	}
	return $data;
}


use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
// use PhpOffice\PhpSpreadsheet\Style\Fill;

function write_data($labels, $array_data)
{
	global $db;
	$newfile = 'blank.xlsx';
	$file = 'import_paid_checked.xlsx';
	$folder = NV_ROOTDIR . '/' . NV_TEMP_DIR . '/';

	$objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load($folder . $newfile);
	//Xuất dữ liệu tại Sheet 1
	$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
	//Xóa các file tạm cũ đi tránh trùng
	if (file_exists($folder . $file)) {
		$check = nv_deletefile($folder . $file, true);
		if ($check[0] != 1) {
			$error = $check[1];
		}
	}
	$r = 1;
	$c = 1;
	foreach ($labels as $label) {
		$objWorksheet->setCellValueByColumnAndRow($c, $r, $label); //Thứ tự
		$c++;
	}
	$r = 2;
	foreach ($array_data as $row) {
		$c = 1;
		foreach ($row as $label => $value) {
			$objWorksheet->setCellValueByColumnAndRow($c, $r, $value); //Thứ tự
			$c++;
		}
		$r++;
	}
	$objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');
	$objWriter->save($folder . $file); //lưu vào file tạm trên server
}

function nv_replate_null($a)
{
	return $a != NULL ? $a : '';
}
