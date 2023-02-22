<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2023 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
	die('Stop!!!');
}


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

$form_display = 1;

$startCol = 'A';
$startRow = 2;
$list_fields = get_fields();

$error = [];
if ($nv_Request->isset_request('submit', 'post')) {
	if ($nv_Request->isset_request('upload', 'post')) {
		$form_display = 0;
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
				$labels = array();
				for ($row = $startRow; $row <= $highestRow; $row++) {
					$col = 0;
					for ($column = $startCol; $column != $highestColumn; $column++) {
						// $array_data[$row][$col] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
						$_field = $objWorksheet->getCellByColumnAndRow($col, 1)->getValue();
						if (in_array($_field, $list_fields)) {
							if (!in_array($_field, $labels)) {
								$labels[] = $_field;
							}
							$_value = check_data($_field, $objWorksheet->getCellByColumnAndRow($col, $row)->getValue());
							$array_data[$row][$_field] = $_value;
							if (empty($_value)) {
								$check_empty = 1;
								$array_data[$row]['error'] .= strval($_field) . '|';
							}
						}
						$col++;
					}
				}
			}
		}
		write_data($labels, $array_data);
	} else if ($nv_Request->isset_request('submit_data', 'post')) {
		$checked = $nv_Request->get_int('checked', 'post', 0);
		$filename = 'import_paid_checked.xlsx';
		$file = NV_ROOTDIR . '/' . NV_TEMP_DIR . '/' . $filename;

		if (file_exists($file)) {
			$objPHPExcel = PHPExcel_IOFactory::load($file);
			$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
			$highestColumn = $objWorksheet->getHighestColumn();
			$highestRow = $objWorksheet->getHighestRow();

			$array_data = array();
			$labels = array();



			for ($row = $startRow; $row <= $highestRow; $row++) {
				$col = 0;
				for ($column = $startCol; $column != $highestColumn; $column++) {
					// $array_data[$row][$col] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
					$_field = $objWorksheet->getCellByColumnAndRow($col, 1)->getValue();
					if (in_array($_field, $list_fields)) {
						if (!in_array($_field, $labels)) {
							$labels[] = $_field;
						}
						$_value = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
						$array_data[$row][$_field] = $_value;
					}
					$col++;
				}
			}
			foreach ($variable as $key => $value) {
				# code...
			}
			print_r($array_data);
			exit();
		} else {
		}
	}
}

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('MODULE_UPLOAD', $module_upload);
$xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
$xtpl->assign('OP', $op);

if (!empty($error)) {
	$xtpl->assign('ERROR', implode('<br />', $error));
	$xtpl->parse('main.error');
}

if ($form_display) {
	$xtpl->parse('main.form');
} else {
	foreach ($labels as $label) {
		$xtpl->assign('label', $lang_module[strtolower($label)]);
		$xtpl->parse('main.data.fields');
	}

	$i = 0;
	foreach ($array_data as $row) {
		$i++;
		$xtpl->assign('num', $i);
		foreach ($row as $field => $value) {
			$xtpl->assign('value', $value);
			$xtpl->assign('field', $field);
			if (empty($value)) {
				$xtpl->assign('data_class', 'bg-danger text-danger');
			} else {
				$xtpl->assign('data_class', '');
			}
			$xtpl->parse('main.data.row.loop');
		}
		$xtpl->parse('main.data.row');
	}
	$xtpl->assign('highestRow', $highestRow);
	$xtpl->assign('highestColumn', $highestColumn);
	$xtpl->parse('main.data');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['main'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
