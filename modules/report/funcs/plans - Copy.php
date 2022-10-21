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
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
    $row['code'] = $nv_Request->get_title('code', 'post', '');
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('date', 'post'), $m)) {
        //Trường hợp cho hiển thị, chỉnh sửa ngày tháng thì sửa lại code dưới
        // $_hour = nv_date('H', NV_CURRENTTIME);
        // $_min = nv_date('i', NV_CURRENTTIME);
        $row['date'] = mktime(0, 0, 0, $m[2], $m[1], $m[3]);
    } else {
        $_day = nv_date('d', NV_CURRENTTIME);
        $_month = nv_date('m', NV_CURRENTTIME);
        $_year = nv_date('Y', NV_CURRENTTIME);
        $row['date'] = mktime(0, 0, 0, $_month, $_day, $_year);
    }
    $row['code'] = $nv_Request->get_title('code', 'post', '');

    $row['namecard'] = $nv_Request->get_int('namecard', 'post', 0);
    $row['point_link'] = $nv_Request->get_int('point_link', 'post', 0);
    $row['online'] = $nv_Request->get_int('online', 'post', 0);
    $row['ads'] = $nv_Request->get_int('ads', 'post', 0);
    $row['ctv'] = $nv_Request->get_int('ctv', 'post', 0);
    $row['cskh'] = $nv_Request->get_int('cskh', 'post', 0);
    $row['telesale'] = $nv_Request->get_int('telesale', 'post', 0);

    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_plans (code, date, namecard, point_link, online, ads, ctv, cskh, telesale) VALUES (:code, :date, :namecard, :point_link, :online, :ads, :ctv, :cskh, :telesale)');
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_plans SET code = :code, date = :date, namecard = :namecard, point_link = :point_link, online = :online, ads = :ads, ctv = :ctv, cskh = :cskh, telesale = :telesale WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':code', $row['code'], PDO::PARAM_STR);
            $stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
            $stmt->bindParam(':namecard', $row['namecard'], PDO::PARAM_INT);
            $stmt->bindParam(':point_link', $row['point_link'], PDO::PARAM_INT);
            $stmt->bindParam(':online', $row['online'], PDO::PARAM_INT);
            $stmt->bindParam(':ads', $row['ads'], PDO::PARAM_INT);
            $stmt->bindParam(':ctv', $row['ctv'], PDO::PARAM_INT);
            $stmt->bindParam(':cskh', $row['cskh'], PDO::PARAM_INT);
            $stmt->bindParam(':telesale', $row['telesale'], PDO::PARAM_INT);

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Plans', ' ', $admin_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Plans', 'ID: ' . $row['id'], $admin_info['userid']);
                }
                nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_plans WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    // $row['namecard'] = 0;
    // $row['point_link'] = 0;
    // $row['online'] = 0;
    // $row['ads'] = 0;
    // $row['ctv'] = 0;
    // $row['cskh'] = 0;
    // $row['telesale'] = 0;
}

if (empty($row['date'])) {
    $row['date'] = nv_date('d/m/Y', NV_CURRENTTIME);
} else {
    $row['date'] = nv_date('d/m/Y', $row['date']);
}

//Hiển thị tên nhân viên
if ($row['id'] > 0) {
    $sale_code = $row['code'];
    $sale_name = displayName($array_code_users[$sale_code]);
} else {
    $_sql = 'SELECT code FROM ' . $db_config['prefix'] . '_users_info where userid = ' . $user_info['userid'];
    $_row = $db->query($_sql)->fetch();
    $sale_code = $_row['code'];
    $sale_name = $user_info['last_name'] . ' ' . $user_info['first_name'];
}

$xtpl = new XTemplate('plans.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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
$xtpl->assign('SALE_CODE', $sale_code);
$xtpl->assign('SALE_NAME', $sale_name);

$fields_list = ['namecard', 'point_link', 'online', 'ads', 'ctv', 'cskh', 'telesale'];

foreach ($fields_list as $field) {
    $xtpl->assign('field_title', $lang_module[$field]);
    $xtpl->assign('field_name', $field);
    $xtpl->assign('field_value', empty($row[$field]) ? '' : $row[$field]);
    $xtpl->parse('main.INPUT');
}


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['plans'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
