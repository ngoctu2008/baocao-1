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
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_actions  WHERE id = ' . $db->quote($id));
        $nv_Cache->delMod($module_name);
        nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete Listaction', 'ID: ' . $id, $admin_info['userid']);
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
}

$row = [];
$error = [];

// $array_code_users = [];
// $_sql = 'SELECT t1.userid, t1.code, t2.first_name, t2.last_name FROM ' . $db_config['prefix'] . '_users_info as t1 LEFT JOIN ' . $db_config['prefix'] . '_users as t2 ON t1.userid = t2.userid WHERE t1.code != ""';
// $_query = $db->query($_sql);
// while ($_row = $_query->fetch()) {
//     $array_code_users[$_row['code']] = $_row;
// }

$q = $nv_Request->get_title('q', 'post,get');

if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $nv_Request->get_string('q_date', 'post,get'), $m)) {
    $q_date = mktime(0, 0, 0, $m[2], $m[1], $m[3]);
    $from_time = mktime(0, 0, 0, $m[2], $m[1], $m[3]);
    $to_time = mktime(23, 59, 59, $m[2], $m[1], $m[3]);
} else if (!empty($nv_Request->get_string('q_date', 'post,get'))) {
    $q_date = $nv_Request->get_string('q_date', 'post,get');
    $from_time = mktime(0, 0, 0, intval(date("m", $q_date)), intval(date("d", $q_date)), intval(date("Y", $q_date)));
    $to_time = mktime(23, 59, 59, intval(date("m", $q_date)), intval(date("d", $q_date)), intval(date("Y", $q_date)));
} else {
    $q_date = NV_CURRENTTIME;
    $from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
    $to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
}

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {
    $show_view = true;
    $per_page = 20;
    $page = $nv_Request->get_int('page', 'post,get', 1);
    $db->sqlreset()
        ->select('COUNT(*)')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_actions');

    $where = 'date >= ' . $from_time . ' and date <= ' . $to_time;
    if (defined('NV_IS_MODADMIN')) {
        $where .= ''; //Nếu từ cấp quản lý module trở lên thì cho xem tất cả
    } elseif ($leader_team < 1) {
        $where .= ' AND code = "' . $array_infor_users[$user_info['userid']]['code']  . '"';
    } else {
        //Nếu là quản lý thì lấy thành viên của nhóm mình
        $in_group = $array_infor_users[$user_info['userid']]['group_id'];
        $list_code_in_group = implode(',', $array_team_users[$in_group]);
        $arr_code_in_group = $array_team_users[$in_group];
        $where .= ' AND code IN ("' . implode('","', $arr_code_in_group) . '") ';
    }
    if (!empty($q)) {
        $where .= ' AND date LIKE :q_date OR code LIKE :q_code OR note LIKE :q_note OR creat_by LIKE :q_creat_by';
    }
    $db->where($where);
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_date', '%' . $q . '%');
        $sth->bindValue(':q_code', '%' . $q . '%');
        $sth->bindValue(':q_note', '%' . $q . '%');
        $sth->bindValue(':q_creat_by', '%' . $q . '%');
    }
    $sth->execute();
    $num_items = $sth->fetchColumn();

    $db->select('*')
        ->order('id DESC')
        ->limit($per_page)
        ->offset(($page - 1) * $per_page);
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_date', '%' . $q . '%');
        $sth->bindValue(':q_code', '%' . $q . '%');
        $sth->bindValue(':q_note', '%' . $q . '%');
        $sth->bindValue(':q_creat_by', '%' . $q . '%');
    }
    $sth->execute();
}

$xtpl = new XTemplate('listaction.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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

$xtpl->assign('Q', $q);
$xtpl->assign('q_date_show', nv_date("d/m/Y", $q_date));

if ($show_view) {
    $base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
    if (!empty($q)) {
        $base_url .= '&q=' . $q;
    }
    if (!empty($q_date)) {
        $base_url .= '&q_date=' . $q_date;
    }
    $generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
    if (!empty($generate_page)) {
        $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
        $xtpl->parse('main.view.generate_page');
    }
    $number = $page > 1 ? ($per_page * ($page - 1)) + 1 : 1;
    while ($view = $sth->fetch()) {
        $view['number'] = $number++;
        $view['note'] = nv_nl2br(nv_htmlspecialchars($view['note']), '</br>');
        $view['date'] = (empty($view['date'])) ? '' : nv_date('d/m/Y', $view['date']);
        $view['sale'] = $array_code_users[$view['code']]['last_name'] . ' ' . $array_code_users[$view['code']]['first_name'] . ' (' . $array_code_users[$view['code']]['code'] . ')';
        // $view['link_edit'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=action-note&amp;id=' . $view['id'];
        $xtpl->assign('VIEW', $view);
        $xtpl->parse('main.view.loop');
    }
    $xtpl->assign('link_add', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=action-note');

    $xtpl->parse('main.view');
}


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['listaction'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
