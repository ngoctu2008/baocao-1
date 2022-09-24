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
global $module_name, $nv_Cache;
define('NV_IS_MOD_REPORT', true);

if (!defined('NV_IS_USER')) {
    nv_redirect_location($global_config['site_url'] . '/users/login/', 301, true);
}

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

//Lấy thông tin cá nhân nhân viên
$array_infor_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != "" ';
$array_infor_users = $nv_Cache->db($_sql, 'userid', $module_name, '', 86400 * 7);

//Lấy danh sách nhân sự của từng Team -> Lưu cache
$array_team_users = [];
$_sql = 'SELECT userid,group_id FROM ' . $db_config['prefix'] . '_users_groups_users WHERE 1 ORDER BY group_id DESC';
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
// exit();


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
