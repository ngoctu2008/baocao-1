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

$row = [];
$error = [];
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
    $row['customer'] = $nv_Request->get_title('customer', 'post', '');
    if (is_file(NV_DOCUMENT_ROOT . $row['customer']))     {
        $row['customer'] = substr($row['customer'], strlen(NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/'));
    } else {
        $row['customer'] = '';
    }
    $row['status'] = $nv_Request->get_int('status', 'post', 0);
    $row['note'] = $nv_Request->get_textarea('note', '', NV_ALLOWED_HTML_TAGS);
    $row['ext_app_id'] = $nv_Request->get_title('ext_app_id', 'post', '');
    $row['c_scheme'] = $nv_Request->get_title('c_scheme', 'post', '');
    $row['dpd'] = $nv_Request->get_int('dpd', 'post', 0);
    $row['allocationdate'] = $nv_Request->get_int('allocationdate', 'post', 0);
    $row['installment_amt'] = $nv_Request->get_title('installment_amt', 'post', '');
    $row['sale_code'] = $nv_Request->get_title('sale_code', 'post', '');
    $row['sale_email'] = $nv_Request->get_title('sale_email', 'post', '');

    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_row (customer, status, note, ext_app_id, c_scheme, dpd, allocationdate, installment_amt, sale_code, sale_email) VALUES (:customer, :status, :note, :ext_app_id, :c_scheme, :dpd, :allocationdate, :installment_amt, :sale_code, :sale_email)');
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_row SET customer = :customer, status = :status, note = :note, ext_app_id = :ext_app_id, c_scheme = :c_scheme, dpd = :dpd, allocationdate = :allocationdate, installment_amt = :installment_amt, sale_code = :sale_code, sale_email = :sale_email WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':customer', $row['customer'], PDO::PARAM_STR);
            $stmt->bindParam(':status', $row['status'], PDO::PARAM_INT);
            $stmt->bindParam(':note', $row['note'], PDO::PARAM_STR, strlen($row['note']));
            $stmt->bindParam(':ext_app_id', $row['ext_app_id'], PDO::PARAM_STR);
            $stmt->bindParam(':c_scheme', $row['c_scheme'], PDO::PARAM_STR);
            $stmt->bindParam(':dpd', $row['dpd'], PDO::PARAM_INT);
            $stmt->bindParam(':allocationdate', $row['allocationdate'], PDO::PARAM_INT);
            $stmt->bindParam(':installment_amt', $row['installment_amt'], PDO::PARAM_STR);
            $stmt->bindParam(':sale_code', $row['sale_code'], PDO::PARAM_STR);
            $stmt->bindParam(':sale_email', $row['sale_email'], PDO::PARAM_STR);

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Row', ' ', $admin_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Row', 'ID: ' . $row['id'], $admin_info['userid']);
                }
                nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch(PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_row WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    $row['id'] = 0;
    $row['customer'] = '''';
    $row['status'] = 0;
    $row['note'] = '''';
    $row['ext_app_id'] = '''';
    $row['c_scheme'] = '''';
    $row['dpd'] = 0;
    $row['allocationdate'] = 0;
    $row['installment_amt'] = '0';
    $row['sale_code'] = '''';
    $row['sale_email'] = '''';
}
if (!empty($row['customer']) and is_file(NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $row['customer'])) {
    $row['customer'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['customer'];
}

$row['note'] = nv_htmlspecialchars(nv_br2nl($row['note']));

$xtpl = new XTemplate('row.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
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
$xtpl->assign('ROW', $row);


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['row'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
