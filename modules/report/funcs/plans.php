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
        $db->query('DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_plans  WHERE id = ' . $db->quote($id));
        $nv_Cache->delMod($module_name);
        nv_insert_logs(NV_LANG_DATA, $module_name, 'Delete Plans', 'ID: ' . $id, $user_info['userid']);
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
    }
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

    //Kiểm tra code + ngày xem đã trùng dữ liệu chưa
    $_sql = 'SELECT code, date FROM ' . NV_PREFIXLANG . '_' . $module_data . '_plans where code = "' . $row['code'] . '" AND date = ' . $row['date'];
    $_row = $db->query($_sql)->fetch();

    if (!empty($_row) and empty($row['id'])) { //Nếu tồn tại nhưng không phải trạng thái sửa thì báo lỗi
        $error[] = sprintf($lang_module['error_duplicated'], $row['code'], nv_date('d/m/Y', $row['date']));
    }

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
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Plans', ' ', $user_info['userid']);
                } else {
                    nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Plans', 'ID: ' . $row['id'], $user_info['userid']);
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


$q_date_from = $nv_Request->get_string('q_date_from', 'post,get', 0);
$q_date_to = $nv_Request->get_string('q_date_to', 'post,get', 0);
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

// Fetch Limit
$show_view = false;
if (!$nv_Request->isset_request('id', 'post,get')) {

    $show_view = true;
    $per_page = 20;
    $page = $nv_Request->get_int('page', 'post,get', 1);
    $db->sqlreset()
        ->select('COUNT(*)')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_plans');

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

    if (!empty($q)) {
        $sth->bindValue(':q_code', '%' . $q . '%');
        $sth->bindValue(':q_date', '%' . $q . '%');
        $sth->bindValue(':q_namecard', '%' . $q . '%');
        $sth->bindValue(':q_point_link', '%' . $q . '%');
        $sth->bindValue(':q_online', '%' . $q . '%');
        $sth->bindValue(':q_ads', '%' . $q . '%');
        $sth->bindValue(':q_ctv', '%' . $q . '%');
        $sth->bindValue(':q_cskh', '%' . $q . '%');
        $sth->bindValue(':q_telesale', '%' . $q . '%');
    }
    $sth->execute();
    $num_items = $sth->fetchColumn();

    $db->select('*')
        ->order('id DESC')
        ->limit($per_page)
        ->offset(($page - 1) * $per_page);
    $sth = $db->prepare($db->sql());

    if (!empty($q)) {
        $sth->bindValue(':q_code', '%' . $q . '%');
        $sth->bindValue(':q_date', '%' . $q . '%');
        $sth->bindValue(':q_namecard', '%' . $q . '%');
        $sth->bindValue(':q_point_link', '%' . $q . '%');
        $sth->bindValue(':q_online', '%' . $q . '%');
        $sth->bindValue(':q_ads', '%' . $q . '%');
        $sth->bindValue(':q_ctv', '%' . $q . '%');
        $sth->bindValue(':q_cskh', '%' . $q . '%');
        $sth->bindValue(':q_telesale', '%' . $q . '%');
    }
    $sth->execute();
}

$template = file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file . '/' . $op . '.tpl') ? $global_config['module_theme'] : 'default';

$xtpl = new XTemplate('plans.tpl', NV_ROOTDIR . '/themes/' . $template . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
$xtpl->assign('TEMPLATE', 'app');
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('MODULE_UPLOAD', $module_upload);
$xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $row);
$xtpl->assign('SALE_CODE', $sale_code);
$xtpl->assign('SALE_NAME', $sale_name);


if (defined('NV_IS_MODADMIN') or $leader_team >= 1) { //Là DSS hoặc cấp quản lý module trở lên
    $xtpl->parse('main.view.IS_MANAGER');
} else { //Nếu là sale 
    $xtpl->parse('main.view.IS_SALE');

    $fields_list = ['namecard', 'point_link', 'online', 'ads', 'ctv', 'cskh', 'telesale'];
    foreach ($fields_list as $field) {
        $xtpl->assign('field_title', $lang_module[$field]);
        $xtpl->assign('field_name', $field);
        $xtpl->assign('field_value', empty($row[$field]) ? '' : $row[$field]);
        $xtpl->parse('main.form.input');
    }
    $xtpl->parse('main.form');
}

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
    if (!empty($q)) {
        $base_url .= '&q=' . $q;
    }
    $generate_page = nv_generate_page($base_url, $num_items, $per_page, $page);
    if (!empty($generate_page)) {
        $xtpl->assign('NV_GENERATE_PAGE', $generate_page);
        $xtpl->parse('main.view.generate_page');
    }
    while ($view = $sth->fetch()) {
        $view['date_show'] = nv_date('d/m/Y', $view['date']);
        $view['ads'] = number_format($view['ads'], 0, ',', '.');
        $view['sale_name'] = displayName($array_code_users[$view['code']]);
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

$page_title = $lang_module['plans'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
