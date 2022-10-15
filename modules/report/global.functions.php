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
    $accepted = ['pl', 'dn', 'xstu', 'ipp', 'banca', 'ubank', 'courier', 'credit']; //Các trường chưa dữ liệu
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
