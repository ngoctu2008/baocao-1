<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_MOD_REPORT')) {
    die('Stop!!!');
}


$row = [];
$error = [];
$row['code'] = $array_infor_users[$user_info['userid']]['code'];
$row['date'] = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
$row['team'] = $array_infor_users[$user_info['userid']]['group_id'];

$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
    $kpi = $nv_Request->get_array('kpi', 'post');
    $target = $nv_Request->get_array('target', 'post');

    if (array_sum($kpi) == 0 or array_sum($target) == 0) {
        $error[] = $lang_module['err_require'];
    } else {
        $arr_kpi = [];
        $arr_target = [];
        foreach ($kpi as $_field => $value) {
            $value = empty($value) ? 0 : $value;
            $arr_kpi[] = $_field . ':' . $value;
        }
        $str_kpi = implode('|', $arr_kpi);
        foreach ($target as $_field => $value) {
            $value = empty($value) ? 0 : $value;
            $arr_target[] = $_field . ':' . $value;
        }
        $str_target = implode('|', $arr_target);
    }

    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_kpi (code, date, team, kpi, target) VALUES (:code, :date, :team, :kpi, :target)');
                $stmt->bindParam(':code', $row['code'], PDO::PARAM_STR);
                $stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_kpi SET kpi = :kpi, target = :target, team =:team WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':team', $row['team'], PDO::PARAM_INT);
            $stmt->bindParam(':kpi', $str_kpi, PDO::PARAM_STR);
            $stmt->bindParam(':target', $str_target, PDO::PARAM_STR);

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Config', ' ', $user_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Config', 'ID: ' . $row['id'], $user_info['userid']);
                }
                nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_kpi WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    } else {
        //Chỉ cho phép sửa trong 10 ngày đầu tháng hiện tại
        $limit_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), 10, intval(date("Y", NV_CURRENTTIME)));
        // if (NV_CURRENTTIME <= ($row['date']) or NV_CURRENTTIME > $limit_time) {
        // nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
        // } else {
        // $kpi = empty($kpi) ? array() : $kpi;
        // $target = empty($target) ? array() : $target;
        $arr_kpi = explode('|', $row['kpi']);
        foreach ($arr_kpi as $value) {
            $a = explode(':', $value);
            $kpi[$a[0]] = $a[1];
        }
        $arr_target = explode('|', $row['target']);
        foreach ($arr_target as $value) {
            $a = explode(':', $value);
            $target[$a[0]] = $a[1];
        }
        // }
    }
} else {
    //Kiểm tra xem đã có dữ liệu cũ của tháng trước chưa
    $last_month = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)) - 1, 1, intval(date("Y", NV_CURRENTTIME)));
    $_row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_kpi WHERE code=' . $db->quote($row['code']) . ' and date=' . $last_month)->fetch();
    if (empty($_row)) {
        $row['id'] = 0;
        $kpi = [];
        $target = [];
    } else {
    }
}

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {
    $show_view = true;
    $db->sqlreset()
        ->select('*')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_kpi')
        ->order('id DESC');
    $sth = $db->prepare($db->sql());
    $sth->execute();
}

$xtpl = new XTemplate('config.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('MODULE_UPLOAD', $module_upload);
$xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);

/**
 * Fill form
 */
$list_field = get_field_rows(); //Danh sách các trường có data
$products = []; //Mảng lưu các nghiệp vụ
foreach ($list_field as $key => $_field) {
    $ex = explode('_', $_field);
    if (empty($products[$ex[0]])) {
        $products[$ex[0]]['title'] = $lang_module[$ex[0]];
        $products[$ex[0]]['name'] = $ex[0];
        $products[$ex[0]]['field_kpi'] = empty($kpi[$ex[0]]) ? 0 : $kpi[$ex[0]];
        $products[$ex[0]]['field_target'] = empty($target[$ex[0]]) ? 0 : $target[$ex[0]];
    }
}
foreach ($products as $key => $value) {
    $xtpl->assign('field_name', $value['name']);
    $xtpl->assign('field_title', $value['title']);
    $xtpl->parse('main.form.loop');
}
$xtpl->parse('main.form');



/** 
 * View
 */

if ($show_view) {
    $number = 0;
    while ($view = $sth->fetch()) {
        $view['number'] = $number++;
        $view['link_edit'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;id=' . $view['id'];
        $view['link_delete'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_id=' . $view['id'] . '&amp;delete_checkss=' . md5($view['id'] . NV_CACHE_PREFIX . $client_info['session_id']);
        $xtpl->assign('VIEW', $view);
        $xtpl->parse('main.view.loop');
    }
    $xtpl->parse('main.view');
}


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['config_kpi'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
