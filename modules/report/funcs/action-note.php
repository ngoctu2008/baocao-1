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
$_row_exist = [];
$arr_user_in_group = [];
$arr_code_in_group = [];

$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
//Nếu là tạo mới 
if (empty($row['id'])) {
    //Khởi tạo danh sách code
    if (defined('NV_IS_MODADMIN')) { //Nếu là ADMIN thì show danh sách các DSS    
        foreach ($array_leader as $group_id => $_leader) {
            $arr_user_in_group[$_leader['userid']] = [
                'code' => $_leader['code'],
                'title' => displayName($array_code_users[$_leader['code']]) . ' <sub> ' . $_leader['code'] . '</sub>'
            ];
            $arr_code_in_group[] = $_leader['code'];
        }
    } elseif ($leader_team > 0) { //Nếu là DSS thì show danh sách sale team mình
        $in_group = $array_infor_users[$user_info['userid']]['group_id'];
        $_arr_user = $array_team_users[$in_group];
        foreach ($_arr_user as $_userid => $_code) {
            $arr_user_in_group[$_userid]['code'] = $_code;
            $arr_user_in_group[$_userid]['title'] = displayName($array_code_users[$_code]) . ' <sub> ' . $_code . '</sub>';
            $arr_code_in_group[] = $_code;
        }
    } else {
        $arr_user_in_group = $array_infor_users[$user_info['userid']]['code'];
    }

    //Kiểm tra code + ngày xem đã trùng dữ liệu chưa
    $query_code = implode('","', $arr_code_in_group);
    $from_time = mktime(0, 0, 0, nv_date('n', NV_CURRENTTIME), nv_date('j', NV_CURRENTTIME), nv_date('Y', NV_CURRENTTIME));
    $to_time = mktime(23, 59, 59, nv_date('n', NV_CURRENTTIME), nv_date('j', NV_CURRENTTIME), nv_date('Y', NV_CURRENTTIME));

    $_sql = 'SELECT code FROM ' . NV_PREFIXLANG . '_' . $module_data . '_actions where code IN ("' . $query_code . '") and date < ' . $to_time . ' and date >=' . $from_time;
    $result = $db->query($_sql);
    while ($_row = $result->fetch()) {
        $_row_exist[] = $_row['code'];
    }
}
if ($nv_Request->isset_request('submit', 'post')) {
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('date', 'post'), $m)) {
        $_hour = 0;
        $_min = 0;
        $row['date'] = mktime($_hour, $_min, 0, $m[2], $m[1], $m[3]);
    } else {
        $row['date'] = NV_CURRENTTIME;
    }
    $row['creat_by'] = $user_info['userid'];
    // $row['code'] = $nv_Request->get_title('code', 'post', '');
    $row['code'] = $nv_Request->get_array('code', 'post', array());
    $row['note'] = $nv_Request->get_textarea('note', '', NV_ALLOWED_HTML_TAGS);

    if (empty($row['id'])) {
        //Kiểm tra code + ngày xem đã trùng dữ liệu chưa
        $query_code = implode('","', $row['code']);
        $_sql = 'SELECT code FROM ' . NV_PREFIXLANG . '_' . $module_data . '_actions where code IN ("' . $query_code . '") AND date = ' . $row['date'];
        $_row_exist = $db->query($_sql)->fetch();
        if (!empty($_row_exist) and empty($row['id'])) { //Nếu tồn tại nhưng không phải trạng thái sửa thì báo lỗi
            $error[] = sprintf($lang_module['error_duplicated'], implode(',', $_row_exist), nv_date('d/m/Y', $row['date']));
        }
    }

    if (empty($row['date'])) {
        $error[] = $lang_module['error_required_date'];
    } elseif (empty($row['code'])) {
        $error[] = $lang_module['error_required_sale'];
    } elseif (empty($row['note'])) {
        $error[] = $lang_module['error_required_note'];
    }


    if (empty($error)) {
        try {
            if (empty($row['id'])) {
                $insert_query = [];
                foreach ($row['code'] as $code) {
                    $insert_query[] = "({$row['date']}, '{$code}', '{$row['note']}', {$row['creat_by']})";
                }
                $insert_query = implode(',', $insert_query);
                $sql = 'INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_actions (date, code, note, creat_by) VALUES ' . $insert_query;

                $stmt = $db->prepare($sql);
                $exc = $stmt->execute();
            } else {
                $stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_actions SET date = :date, code = :code, note = :note, creat_by = :creat_by WHERE id=' . $row['id']);
                $code = $row['code'][0];
                $stmt->bindParam(':code', $code, PDO::PARAM_STR);
                $stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
                $stmt->bindParam(':creat_by', $row['creat_by'], PDO::PARAM_STR);
                $stmt->bindParam(':note', $row['note'], PDO::PARAM_STR, strlen($row['note']));

                $exc = $stmt->execute();
            }
            if ($exc) {
                $nv_Cache->delMod($module_name);
                if (empty($row['id'])) {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Action-note', 'Date: ' . nv_date('d/m/Y', $row['date']) . ', For Sale code: ' . implode(',', $row['code']), $user_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Action-note', 'ID: ' . $row['id'], $user_info['userid']);
                }
                $redirect = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=listaction';
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
    $row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_actions WHERE id=' . $row['id'])->fetch();
    if (empty($row)) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
    // $arr_user_in_group = [];
    // $arr_user_in_group[] = ['code' => $row['code'], 'title' => displayName($array_code_users[$row['code']])];
} else { //Load form mới    
    $row['id'] = 0;
    $row['creat_by'] = $user_info['userid'];
    $row['date'] = 0;
    $row['note'] = '';
    // $row['code'] = $nv_Request->get_array('code', 'post,get', []);
}

if (empty($row['date'])) {
    $row['date'] = date('d/m/Y', NV_CURRENTTIME);
} else {
    $row['date'] = date('d/m/Y', $row['date']);
}
$row['note'] = nv_htmlspecialchars(nv_br2nl($row['note']));


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

if (empty($row['id'])) {
    foreach ($arr_user_in_group as $_userid => $value) {
        if (!empty($_row_exist) and in_array($value['code'], $_row_exist)) {
            $exist = true;
        } else {
            $exist = false;
        }
        $xtpl->assign('OPTION', [
            'key' => $value['code'],
            'title' => $value['title'],
            // 'checked' => ($value['code'] == $row['code']) ? ' checked="checked"' : '',
            'disabled' => $exist ? 'disabled' : '',
            'color' => $exist ? 'red' : ''
        ]);
        $xtpl->parse('main.checkbox_code.loop');
    }
    $xtpl->parse('main.checkbox_code');
    $page_title = $lang_module['add_action'];
} else {
    $xtpl->assign('SALE_TITLE', displayName($array_code_users[$row['code']]) . ' (' . $row['code'] . ')');
    $xtpl->parse('main.input_code');
    $page_title = $lang_module['edit_add_action'];
}


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');



include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
