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

if ($nv_Request->isset_request('delete_id', 'get') and $nv_Request->isset_request('delete_checkss', 'get')) {
    $id = $nv_Request->get_int('delete_id', 'get');
    $delete_checkss = $nv_Request->get_string('delete_checkss', 'get');
    if ($id > 0 and $delete_checkss == md5($id . NV_CACHE_PREFIX . $client_info['session_id'])) {
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows  WHERE id = ' . $db->quote($id));
        $nv_Cache->delMod($module_name);
        nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete Monitor', 'ID: ' . $id, $admin_info['userid']);
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
}

$row = [];
$error = [];
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
    $row['date'] = $nv_Request->get_int('date', 'post', 0);
    $row['code'] = $nv_Request->get_title('code', 'post', '');
    $row['pl_app'] = $nv_Request->get_int('pl_app', 'post', 0);
    $row['pl_loan'] = $nv_Request->get_int('pl_loan', 'post', 0);
    $row['dn_app'] = $nv_Request->get_int('dn_app', 'post', 0);
    $row['dn_loan'] = $nv_Request->get_int('dn_loan', 'post', 0);
    $row['xstu_check'] = $nv_Request->get_int('xstu_check', 'post', 0);
    $row['xstu_app'] = $nv_Request->get_int('xstu_app', 'post', 0);
    $row['xstu_loan'] = $nv_Request->get_int('xstu_loan', 'post', 0);
    $row['ipp_app'] = $nv_Request->get_int('ipp_app', 'post', 0);
    $row['ipp_loan'] = $nv_Request->get_int('ipp_loan', 'post', 0);
    $row['banca_hd'] = $nv_Request->get_int('banca_hd', 'post', 0);
    $row['banca_sale'] = $nv_Request->get_int('banca_sale', 'post', 0);
    $row['ubank_app'] = $nv_Request->get_int('ubank_app', 'post', 0);
    $row['ubank_loan'] = $nv_Request->get_int('ubank_loan', 'post', 0);
    $row['courier_lead'] = $nv_Request->get_int('courier_lead', 'post', 0);
    $row['courier_app'] = $nv_Request->get_int('courier_app', 'post', 0);
    $row['courier_loan'] = $nv_Request->get_int('courier_loan', 'post', 0);
    $row['credit_app'] = $nv_Request->get_int('credit_app', 'post', 0);
    $row['credit_loan'] = $nv_Request->get_int('credit_loan', 'post', 0);

    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_rows (date, code, pl_app, pl_loan, dn_app, dn_loan, xstu_check, xstu_app, xstu_loan, ipp_app, ipp_loan, banca_hd, banca_sale, ubank_app, ubank_loan, courier_lead, courier_app, courier_loan, credit_app, credit_loan) VALUES (:date, :code, :pl_app, :pl_loan, :dn_app, :dn_loan, :xstu_check, :xstu_app, :xstu_loan, :ipp_app, :ipp_loan, :banca_hd, :banca_sale, :ubank_app, :ubank_loan, :courier_lead, :courier_app, :courier_loan, :credit_app, :credit_loan)');
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_rows SET date = :date, code = :code, pl_app = :pl_app, pl_loan = :pl_loan, dn_app = :dn_app, dn_loan = :dn_loan, xstu_check = :xstu_check, xstu_app = :xstu_app, xstu_loan = :xstu_loan, ipp_app = :ipp_app, ipp_loan = :ipp_loan, banca_hd = :banca_hd, banca_sale = :banca_sale, ubank_app = :ubank_app, ubank_loan = :ubank_loan, courier_lead = :courier_lead, courier_app = :courier_app, courier_loan = :courier_loan, credit_app = :credit_app, credit_loan = :credit_loan WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
            $stmt->bindParam(':code', $row['code'], PDO::PARAM_STR);
            $stmt->bindParam(':pl_app', $row['pl_app'], PDO::PARAM_INT);
            $stmt->bindParam(':pl_loan', $row['pl_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':dn_app', $row['dn_app'], PDO::PARAM_INT);
            $stmt->bindParam(':dn_loan', $row['dn_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':xstu_check', $row['xstu_check'], PDO::PARAM_INT);
            $stmt->bindParam(':xstu_app', $row['xstu_app'], PDO::PARAM_INT);
            $stmt->bindParam(':xstu_loan', $row['xstu_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':ipp_app', $row['ipp_app'], PDO::PARAM_INT);
            $stmt->bindParam(':ipp_loan', $row['ipp_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':banca_hd', $row['banca_hd'], PDO::PARAM_INT);
            $stmt->bindParam(':banca_sale', $row['banca_sale'], PDO::PARAM_INT);
            $stmt->bindParam(':ubank_app', $row['ubank_app'], PDO::PARAM_INT);
            $stmt->bindParam(':ubank_loan', $row['ubank_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':courier_lead', $row['courier_lead'], PDO::PARAM_INT);
            $stmt->bindParam(':courier_app', $row['courier_app'], PDO::PARAM_INT);
            $stmt->bindParam(':courier_loan', $row['courier_loan'], PDO::PARAM_INT);
            $stmt->bindParam(':credit_app', $row['credit_app'], PDO::PARAM_INT);
            $stmt->bindParam(':credit_loan', $row['credit_loan'], PDO::PARAM_INT);

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Monitor', ' ', $admin_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Monitor', 'ID: ' . $row['id'], $admin_info['userid']);
                }
                nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    $row['id'] = 0;
    $row['date'] = 0;
    $row['code'] = '';
    $row['pl_app'] = 0;
    $row['pl_loan'] = 0;
    $row['dn_app'] = 0;
    $row['dn_loan'] = 0;
    $row['xstu_check'] = 0;
    $row['xstu_app'] = 0;
    $row['xstu_loan'] = 0;
    $row['ipp_app'] = 0;
    $row['ipp_loan'] = 0;
    $row['banca_hd'] = 0;
    $row['banca_sale'] = 0;
    $row['ubank_app'] = 0;
    $row['ubank_loan'] = 0;
    $row['courier_lead'] = 0;
    $row['courier_app'] = 0;
    $row['courier_loan'] = 0;
    $row['credit_app'] = 0;
    $row['credit_loan'] = 0;
}

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {
    $show_view = true;
    $db->sqlreset()
        ->select('*')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows')
        ->order('id DESC');
    $sth = $db->prepare($db->sql());
    $sth->execute();
}

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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

$page_title = $lang_module['monitor'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
