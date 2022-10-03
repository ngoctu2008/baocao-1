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

$time_over = [0, 24];

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
 * Lấy danh sách nhân sự của từng Team -> Lưu cache 
 * Result: Array[group_id][userid] = code;
 */

$array_team_users = [];
$_sql = 'SELECT userid,group_id FROM ' . $db_config['prefix'] . '_users_groups_users WHERE is_leader = 0 ORDER BY group_id DESC'; //Không lấy trưởng nhóm
$_list = $nv_Cache->db($_sql, '', $module_name, '', 86400 * 7);

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
