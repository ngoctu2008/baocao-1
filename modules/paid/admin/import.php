<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Tuấn Phạm <tuanpb1988@gmail.com>
 * @Copyright (C) 2023 Tuấn Phạm. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 15 Feb 2023 15:38:52 GMT
 */

if (!defined('NV_IS_FILE_ADMIN')) {
	die('Stop!!!');
}


$page_title = $lang_module['import'];


if (!class_exists('PHPExcel')) {
	if (file_exists(NV_ROOTDIR . '/includes/class/PHPExcel.php')) {
		require_once NV_ROOTDIR . '/includes/class/PHPExcel.php';
	}
}

if (!class_exists('PHPExcel')) {
	$contents = nv_theme_alert($lang_module['phpexcel_not_exists_title'], $lang_module['phpexcel_not_exists_content'], 'danger');
	include NV_ROOTDIR . '/includes/header.php';
	echo nv_admin_theme($contents);
	include NV_ROOTDIR . '/includes/footer.php';
}

$startCol = 'A';
$startRow = 2;

$list_fields = ['EXT_APP_ID', 'C_SCHEME', 'ALLOCATIONDATE', 'DPD', 'INSTALLMENT_AMT', 'FV_ASSIGNED_TO'];


if ($nv_Request->isset_request('upload', 'post')) {
	if (isset($_FILES['file']) and is_uploaded_file($_FILES['file']['tmp_name'])) {
		$filename = 'import_paid.xlsx'; //nv_string_to_filename($_FILES['file']['name']);
		$file = NV_ROOTDIR . '/' . NV_TEMP_DIR . '/' . $filename;

		if (file_exists($file)) {
			unlink($file);
		}

		if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
			$objPHPExcel = PHPExcel_IOFactory::load($file);
			$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
			$highestRow = $objWorksheet->getHighestRow();
			$highestColumn = $objWorksheet->getHighestColumn();



			$array_data = array();
			for ($row = $startRow; $row <= $highestRow; $row++) {
				$col = 0;
				for ($column = $startCol; $column <= $highestColumn; $column++) {
					$array_data[$row][$col] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
					$col++;
				}
			}

			nv_jsonOutput(array(
				'error' => 0,
				'filename' => $filename,
				'total' => sizeof($array_data),
				'data' => $array_data,
				'highestColumn' => $highestColumn,
				'highestRow' => $highestRow
			));
		}
	}
	nv_jsonOutput(array(
		'error' => 1,
		'msg' => $lang_module['error_required_file']
	));
}

$xtpl = new XTemplate('import.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);


$xtpl->assign('STARTROW', $startRow);
//-------------------------------
// Viết code xuất ra site vào đây
//-------------------------------

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
