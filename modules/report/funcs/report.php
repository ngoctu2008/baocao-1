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

$now_time = nv_date('h:i:s', NV_CURRENTTIME);
echo $now_time;
exit();

$row = [];
$error = [];
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('date', 'post'), $m)) {
        $_hour = 0;
        $_min = 0;
        $row['date'] = mktime($_hour, $_min, 0, $m[2], $m[1], $m[3]);
    } else {
        $row['date'] = 0;
    }
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


    //Kiểm tra code + ngày xem đã trùng dữ liệu chưa
    $_sql = 'SELECT code, date FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows where code = "' . $row['code'] . '" AND date = ' . $row['date'];
    $_row = $db->query($_sql)->fetch();

    if (!empty($_row)) {
        $error[] = sprintf($lang_module['error_duplicated'], $row['code'], nv_date('d/m/Y', $row['date']));
    }

    if (empty($row['date'])) {
        $error[] = $lang_module['error_required_date'];
    } elseif (empty($row['code'])) {
        $error[] = $lang_module['error_required_code'];
    } elseif (!check_number($row['pl_app'])) {
        $error[] = $lang_module['error_required_pl_app'];
    } elseif (!check_number($row['pl_loan'])) {
        $error[] = $lang_module['error_required_pl_loan'];
    } elseif (!check_number($row['dn_app'])) {
        $error[] = $lang_module['error_required_dn_app'];
    } elseif (!check_number($row['dn_loan'])) {
        $error[] = $lang_module['error_required_dn_loan'];
    } elseif (!check_number($row['xstu_check'])) {
        $error[] = $lang_module['error_required_xstu_check'];
    } elseif (!check_number($row['xstu_app'])) {
        $error[] = $lang_module['error_required_xstu_app'];
    } elseif (!check_number($row['xstu_loan'])) {
        $error[] = $lang_module['error_required_xstu_loan'];
    } elseif (!check_number($row['ipp_app'])) {
        $error[] = $lang_module['error_required_ipp_app'];
    } elseif (!check_number($row['ipp_loan'])) {
        $error[] = $lang_module['error_required_ipp_loan'];
    } elseif (!check_number($row['banca_hd'])) {
        $error[] = $lang_module['error_required_banca_hd'];
    } elseif (!check_number($row['banca_sale'])) {
        $error[] = $lang_module['error_required_banca_sale'];
    } elseif (!check_number($row['ubank_app'])) {
        $error[] = $lang_module['error_required_ubank_app'];
    } elseif (!check_number($row['ubank_loan'])) {
        $error[] = $lang_module['error_required_ubank_loan'];
    } elseif (!check_number($row['courier_lead'])) {
        $error[] = $lang_module['error_required_courier_lead'];
    } elseif (!check_number($row['courier_app'])) {
        $error[] = $lang_module['error_required_courier_app'];
    } elseif (!check_number($row['courier_loan'])) {
        $error[] = $lang_module['error_required_courier_loan'];
    } elseif (!check_number($row['credit_app'])) {
        $error[] = $lang_module['error_required_credit_app'];
    } elseif (!check_number($row['credit_loan'])) {
        $error[] = $lang_module['error_required_credit_loan'];
    }

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
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Report', 'Date: ' . nv_date('d/m/Y', $row['date']) . ', Sale code: ' . $row['code'], $user_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Report', 'ID: ' . $row['id'], $user_info['userid']);
                }

                $redirect = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main';
                $contents = nv_theme_alert($lang_module['success'], $lang_module['waiting_redirect'], 'success', $redirect, $lang_module['redirect'], 1);
                include NV_ROOTDIR . '/includes/header.php';
                echo nv_site_theme($contents);
                include NV_ROOTDIR . '/includes/footer.php';
                exit();
                // nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
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
    // $row['id'] = 0;
    // $row['date'] = 0;
    // $row['code'] = '';
    // $row['pl_app'] = 0;
    // $row['pl_loan'] = 0;
    // $row['dn_app'] = 0;
    // $row['dn_loan'] = 0;
    // $row['xstu_check'] = 0;
    // $row['xstu_app'] = 0;
    // $row['xstu_loan'] = 0;
    // $row['ipp_app'] = 0;
    // $row['ipp_loan'] = 0;
    // $row['banca_hd'] = 0;
    // $row['banca_sale'] = 0;
    // $row['ubank_app'] = 0;
    // $row['ubank_loan'] = 0;
    // $row['courier_lead'] = 0;
    // $row['courier_app'] = 0;
    // $row['courier_loan'] = 0;
    // $row['credit_app'] = 0;
    // $row['credit_loan'] = 0;
}

if (empty($row['date'])) {
    $row['date'] = date('d/m/Y', NV_CURRENTTIME);
} else {
    $row['date'] = date('d/m/Y', $row['date']);
}

$_sql = 'SELECT code FROM ' . $db_config['prefix'] . '_users_info where userid = ' . $user_info['userid'];
$_row = $db->query($_sql)->fetch();
$sale_code = $_row['code'];
$sale_name = $user_info['last_name'] . ' ' . $user_info['first_name'];

$xtpl = new XTemplate('report.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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

if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['report'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
