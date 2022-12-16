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
 * BEGIN KPI, TARGET
 * Khởi tạo KPI, Target
 * Tính toán %KPI đạt được, %Target đạt được của User
 */
$kpi = ['pl' => 25, 'dn' => 15, 'xstu' => 15, 'ipp' => 15, 'banca' => 10, 'ubank' => 5, 'courier' => 5, 'credit' => 10, 'smartpos' => 0]; //đơn vị %
$target = ['pl' => 5, 'dn' => 3, 'xstu' => 4, 'ipp' => 0, 'banca' => 10000000, 'ubank' => 5, 'courier' => 5, 'credit' => 0, 'smartpos' => 0];

//Tính Tổng số % các nghiệp vụ bán của user
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


function get_field_extract($field_array)
{
	$arr_label = [];
	foreach ($field_array as $key) {
		$_field = explode('_', $key);
		$arr_label[$_field[0]][] = $_field[1];
	}
	return $arr_label;
}


function get_field_rows()
{
	global $db, $module_data;
	$accepted = ['pl', 'dn', 'xstu', 'ipp', 'banca', 'ubank', 'courier', 'credit', 'smartpos', 'vpbank', 'sfc']; //Các trường chứa dữ liệu
	$fields = array();
	$_sql = "SHOW COLUMNS FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows LIKE '%\_%'";
	$_query = $db->query($_sql);

	// echo $_sql;
	while ($_row = $_query->fetch()) {
		$field_full = explode('_', $_row['field']);
		if (in_array($field_full[0], $accepted)) {
			// echo "<br>Field name: " . $field_full[0];
			$fields[] = $_row['field'];
		}
	}
	return $fields;
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
	while (list($key, $value) = each($array)) {
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
