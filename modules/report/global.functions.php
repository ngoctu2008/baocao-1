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

//Lấy thông tin toàn bộ user, key là code
$array_code_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name, t2.group_id FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != ""';
$array_code_users = $nv_Cache->db($_sql, 'code', $module_name, '', 86400 * 30);

//Lấy thông tin cá nhân nhân viên, key là userid
$array_infor_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name, t2.group_id FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != "" ';
$array_infor_users = $nv_Cache->db($_sql, 'userid', $module_name, '', 86400 * 7);

//Lấy thông tin các nhóm
$array_group_info = [];
$_sql = 'SELECT group_id, title FROM ' . $db_config['prefix'] . '_users_groups_detail WHERE group_id > 12';
$array_group_info = $nv_Cache->db($_sql, 'group_id', $module_name, '', 0);

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

function render_data_total($type = 'month')
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

function check_report_static()
{
    global $module_data, $db;

    $from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
    $to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));

    $where = ' WHERE date >= ' . $from_time . ' AND date <= ' . $to_time;
    $_sql = "SELECT code FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows " . $where;
    $_query = $db->query($_sql);

    $result = [];
    while ($_row = $_query->fetch()) {
        $result[] = $_row['code'];
        // echo nv_date('d/m/Y', $_row['date']);
        // print_r($_row);
    }

    return $result;
}

function get_action_note($userid, $for_display = 1)
{
    global $global_config, $array_infor_users, $module_data, $db, $module_name;
    //ACTION_NOTE
    $from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
    $to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));

    $where = ' date >= ' . $from_time . ' AND date <= ' . $to_time;
    $where .= " AND code = '" . $array_infor_users[$userid]['code'] . "'";

    $_sql = "SELECT * FROM " . NV_PREFIXLANG . "_" . $module_data . "_actions WHERE " . $where;
    $_action = $db->query($_sql)->fetch();

    if (empty($_action)) {
        $_action['note'] = '';
        if ($for_display) {
            $link_add_action = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=action-note';
            $_action['note'] = '<a href="' . $link_add_action . '" class="btn btn-success text-center"> <i class="fa fa-plus-circle" aria-hidden="true"> Add Action Note </i> </a>';
        }
    } else {
        $_action['note'] = nv_nl2br(nv_htmlspecialchars($_action['note']), '</br>');
    }

    return $_action['note'];
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
