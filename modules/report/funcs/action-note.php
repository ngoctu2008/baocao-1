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
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('date', 'post'), $m)) {
        $_hour = 0;
        $_min = 0;
        $row['date'] = mktime($_hour, $_min, 0, $m[2], $m[1], $m[3]);
    } else {
        $row['date'] = NV_CURRENTTIME;
    }
    $row['creat_by'] = $user_info['userid'];
    $row['code'] = $nv_Request->get_title('code', 'post', '');
    $row['note'] = $nv_Request->get_textarea('note', '', NV_ALLOWED_HTML_TAGS);

    if (empty($row['date'])) {
        $error[] = $lang_module['error_required_date'];
    } elseif (empty($row['code'])) {
        $error[] = $lang_module['error_required_code'];
    } elseif (empty($row['note'])) {
        $error[] = $lang_module['error_required_note'];
    }

    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_actions (date, code, note, creat_by) VALUES (:date, :code, :note, :creat_by)');
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_actions SET date = :date, code = :code, note = :note, creat_by = :creat_by WHERE id=' . $row['id']);
            }
            $stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
            $stmt->bindParam(':code', $row['code'], PDO::PARAM_STR);
            $stmt->bindParam(':creat_by', $row['creat_by'], PDO::PARAM_STR);
            $stmt->bindParam(':note', $row['note'], PDO::PARAM_STR, strlen($row['note']));

            $exc = $stmt->execute();
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Action-note', 'Date: ' . nv_date('d/m/Y', $row['date']) . ', For Sale code: ' . $row['code'], $user_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Action-note', 'ID: ' . $row['id'], $user_info['userid']);
                }
                // $redirect = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=listaction';
                // $contents = nv_theme_alert($lang_module['success'], $lang_module['waiting_redirect'], 'success', $redirect, $lang_module['redirect'], 1);
                // include NV_ROOTDIR . '/includes/header.php';
                // echo nv_site_theme($contents);
                // include NV_ROOTDIR . '/includes/footer.php';
                // exit();

                nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
            }
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
            die($e->getMessage()); //Remove this line after checks finished
        }
    }
} elseif ($row['id'] > 0) {
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_actions WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
} else {
    $row['id'] = 0;
    $row['creat_by'] = $user_info['userid'];
    $row['date'] = 0;
    $row['code'] = '';
    $row['note'] = '';
}

if (empty($row['date'])) {
    $row['date'] = date('d/m/Y', NV_CURRENTTIME);
} else {
    $row['date'] = date('d/m/Y', $row['date']);
}

$row['note'] = nv_htmlspecialchars(nv_br2nl($row['note']));

$array_code_users = [];
$_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != ""';
$_query = $db->query($_sql);
while ($_row = $_query->fetch()) {
    $array_code_users[$_row['userid']] = $_row;
}

$xtpl = new XTemplate('action-note.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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

foreach ($array_code_users as $value) {
    $xtpl->assign('OPTION', [
        'key' => $value['code'],
        'title' => $value['last_name'] . ' ' . $value['first_name'] . ' (' . $value['code'] . ')',
        'selected' => ($value['code'] == $row['code']) ? ' selected="selected"' : ''
    ]);
    $xtpl->parse('main.select_code');
}

if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['action-note'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
