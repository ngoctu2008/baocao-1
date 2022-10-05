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

$q_date_from = $nv_Request->get_string('q_date_from', 'post,get', 0);
$q_date_to = $nv_Request->get_string('q_date_to', 'post,get', 0);
$q_type = $nv_Request->get_int('q_type', 'post,get', 0);

if ((empty($q_date_from)) and (empty($q_date_to))) {
    $q_date = NV_CURRENTTIME;
    //Set thời gian lọc mặc định
    if ($leader_team < 1) { //Sale thì sẽ mặc định hiển thị cả tháng
        $from_time = mktime(0, 0, 0, intval(date("m", $q_date)), 1, intval(date("Y", $q_date)));
        $to_time = mktime(0, 0, 0, intval(date("m", $q_date)) + 1, 1, intval(date("Y", $q_date))) - 1;
    } else { //Ngược lại hiển thị ngày hiện tại
        $from_time = mktime(0, 0, 0, intval(date("m", $q_date)), intval(date("d", $q_date)), intval(date("Y", $q_date)));
        $to_time = mktime(23, 59, 59, intval(date("m", $q_date)), intval(date("d", $q_date)), intval(date("Y", $q_date)));
    }
} elseif ((empty($q_date_from)) or (empty($q_date_to))) {
    $q_date_from = empty($q_date_from) ? $q_date_to : $q_date_from;
    $q_date_to = empty($q_date_to) ? $q_date_from : $q_date_to;
    $from_time = mktime(0, 0, 0, intval(date("m", $q_date_from)), 1, intval(date("Y", $q_date_from)));
    $to_time = mktime(23, 59, 59, intval(date("m", $q_date_to)), 1, intval(date("Y", $q_date_to)));
} else {
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $q_date_from, $m)) {
        $from_time = mktime(0, 0, 0, $m[2], $m[1], $m[3]);
    }
    if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $q_date_to, $n)) {
        $to_time = mktime(23, 59, 59, $n[2], $n[1], $n[3]);
    }
    if ($to_time < $from_time) {
        $tg = $to_time;
        $to_time = $from_time;
        $from_time = $tg;
        // $error[] = $lang_module['error_search_date'];
    }
}


if ($nv_Request->isset_request('export', 'get')) {
    if (defined('NV_IS_MODADMIN')) { //Nếu từ cấp quản lý module trở lên thì cho xem tất cả
        //Lọc các bản ghi trong ngày
        // $from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
        // $to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
        $where = 'date >= ' . intval($from_time) . ' and date <= ' . intval($to_time);

        $_sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE ' . $where . ' ORDER BY code';
        $_query = $db->query($_sql);

        $array_data = [];
        while ($_row = $_query->fetch()) {
            $group_id = $array_code_users[$_row['code']]['group_id'];
            $_row['team'] = $array_group_info[$group_id]['title'];
            $_row['sale_name'] = $array_code_users[$_row['code']]['last_name'] . ' ' . $array_code_users[$_row['code']]['first_name'];
            $_row['action_note'] = str_replace('</br>', '. ', get_action_note($array_code_users[$_row['code']]['userid'], 0));
            $array_data[] = $_row;
        }

        export_dailyreport($array_data);
    } elseif ($leader_team < 1) {
        //Không phải là leader, không được xuất file
        $redirect = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=list-report';
        $contents = nv_theme_alert($lang_module['warning'], $lang_module['no_permission'], 'warning', $redirect, $lang_module['redirect'], 1);
        include NV_ROOTDIR . '/includes/header.php';
        echo nv_site_theme($contents);
        include NV_ROOTDIR . '/includes/footer.php';
        exit();
    } else {
        //Lọc các bản ghi trong ngày
        $from_time = mktime(0, 0, 0, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
        $to_time = mktime(23, 59, 59, intval(date("m", NV_CURRENTTIME)), intval(date("d", NV_CURRENTTIME)), intval(date("Y", NV_CURRENTTIME)));
        $where = 'date >= ' . $from_time . ' and date <= ' . $to_time;
        foreach ($array_team_users[$leader_team] as $_userid => $_code) {
            if (!empty($_code)) {
                $_arr_code[] = '"' . $_code . '"';
            }
        }
        $list_code = implode(',', $_arr_code);
        $where .= ' AND code IN (' . $list_code . ') ';

        $_sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE ' . $where;
        $_query = $db->query($_sql);

        $array_data = [];
        while ($_row = $_query->fetch()) {
            $group_id = $array_code_users[$_row['code']]['group_id'];
            $_row['team'] = $array_group_info[$group_id]['title'];
            $_row['sale_name'] = $array_code_users[$_row['code']]['last_name'] . ' ' . $array_code_users[$_row['code']]['first_name'];
            $_row['action_note'] = str_replace('</br>', '. ', get_action_note($array_code_users[$_row['code']]['userid'], 0));
            $array_data[] = $_row;
        }

        export_dailyreport($array_data);
    }
}

$row = [];
$error = [];

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {
    $show_view = true;
    $per_page = 31;
    $page = $nv_Request->get_int('page', 'post,get', 1);
    $db->sqlreset()
        ->select('COUNT(*)')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows');

    $where = 'date >= ' . intval($from_time) . ' and date <= ' . intval($to_time);

    if (defined('NV_IS_MODADMIN')) { //Nếu từ cấp quản lý module trở lên thì cho xem tất cả
        $where .= '';
    } elseif ($leader_team < 1) { //Nếu là sale 
        $where .= ' AND code = "' . $array_infor_users[$user_info['userid']]['code'] . '"';
    } else { //Nếu là leader
        $_arr_code = [];
        foreach ($array_team_users[$leader_team] as $_userid => $_code) {
            if (!empty($_code)) {
                $_arr_code[] = '"' . $_code . '"';
            }
        }
        $list_code = implode(',', $_arr_code);
        $where .= ' AND code IN (' . $list_code . ') ';
    }
    $db->where($where);
    $db->order('date DESC');
    $sth = $db->prepare($db->sql());

    $sth->execute();
    $num_items = $sth->fetchColumn();

    //Tính tổng các cột
    $total = array();
    $arr_field = ['pl_app', 'pl_loan', 'dn_app', 'dn_loan', 'xstu_check', 'xstu_app', 'xstu_loan', 'ipp_app', 'ipp_loan', 'banca_hd', 'banca_sale', 'ubank_app', 'ubank_loan', 'courier_lead', 'courier_app', 'courier_loan', 'credit_app', 'credit_loan'];
    $_sql = [];
    foreach ($arr_field as $_field) {
        $_sql[] = 'sum(' . $_field . ') as total_' . $_field;
    }
    $_sql = implode(',', $_sql);

    $db->select($_sql);
    $sth = $db->prepare($db->sql());
    $sth->execute();
    $_arr_total = $sth->fetch();


    //Lấy danh sách
    $db->select('*')
        ->limit($per_page)
        ->offset(($page - 1) * $per_page);
    $sth = $db->prepare($db->sql());

    $sth->execute();
}

$xtpl = new XTemplate('list-report.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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

$xtpl->assign('q_date_from_show', nv_date('d/m/Y', $from_time));
$xtpl->assign('q_date_to_show', nv_date('d/m/Y', $to_time));
if (empty($q_date_from) or empty($q_date_to)) {
    $_date = empty($from_time) ? $to_time : $from_time;
    // $_date = empty($_date) ? NV_CURRENTTIME : $_date;
    $xtpl->assign('date', nv_date('d/m/Y', $_date));
} else {
    $xtpl->assign('date', nv_date('d/m/Y', $from_time) . ' - ' . nv_date('d/m/Y', $to_time));
}

if ($show_view) {
    $base_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op;
    if (!empty($q_date_from)) {
        $base_url .= '&q_date_from=' . $q_date_from;
    }
    if (!empty($q_date_to)) {
        $base_url .= '&q_date_to=' . $q_date_to;
    }
    $generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
    if (!empty($generate_page)) {
        $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
        $xtpl->parse('main.view.generate_page');
    }
    $number = $page > 1 ? ($per_page * ($page - 1)) + 1 : 1;

    //Tính tổng theo từng team
    $total = [];

    while ($view = $sth->fetch()) {
        $view['number'] = $number++;
        $view['banca_sale'] = empty($view['banca_sale']) ? 0 : number_format($view['banca_sale'], 0, ',', '.');
        $view['sale_name'] =  $array_code_users[$view['code']]['last_name'] . ' ' . $array_code_users[$view['code']]['first_name'] . ' (' . $view['code'] . ')';
        $view['link_edit'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=report&amp;id=' . $view['id'];
        $view['action_note'] = get_action_note($array_code_users[$view['code']]['userid'], 0, $view['date']);
        if (empty($view['action_note'])) {
            $view['link_add'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=action-note';
            $xtpl->parse('main.view.loop.add_action');
        } else {
            $view['action_note'] = str_replace('</br>', '. ', $view['action_note']);
            $xtpl->parse('main.view.loop.view_action');
        }
        $view['date'] = nv_date('d/m/Y', $view['date']);
        // $view['link_delete'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $op . '&amp;delete_id=' . $view['id'] . '&amp;delete_checkss=' . md5($view['id'] . NV_CACHE_PREFIX . $client_info['session_id']);
        $xtpl->assign('VIEW', $view);
        $xtpl->parse('main.view.loop');
    }
    $xtpl->assign('link_add_report', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=report');
    if ($level == 1) {
        $xtpl->parse('main.view.extract_button');
        // $xtpl->parse('main.view.report_button');
    } elseif ($level == 2) {
        $xtpl->parse('main.view.extract_button');
    } else {
        $xtpl->parse('main.view.report_button');
    }

    //Fill dòng tổng cộng
    foreach ($_arr_total as $total_field => $total_value) {
        $total_value = empty($total_value) ? 0 : number_format($total_value, 0, ',', '.');
        $xtpl->assign('TOTAL', $total_value);
        $xtpl->parse('main.view.TOTAL');
    }

    if (defined('NV_IS_MODADMIN')) {
        $xtpl->parse('main.view.search_type');
    }

    $xtpl->parse('main.view');
}


if (!empty($error)) {
    $xtpl->assign('ERROR', implode('<br />', $error));
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['main'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
