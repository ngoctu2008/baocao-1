<?php

/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

if (!defined('NV_IS_MOD_REPORT')) {
    die('Stop!!!');
}

/**
 * nv_theme_report_main_manager()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_report_main_manager()
{
    global $module_info, $lang_module, $user_info, $op, $module_file, $db, $module_data;

    // Fetch Limit
    $db->sqlreset()
        ->select('*')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows')
        ->order('id DESC');
    $sth = $db->prepare($db->sql());
    $sth->execute();

    $xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
    $xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    $xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
    $xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
    $xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
    $xtpl->assign('OP', $op);

    //Hiển thị Số liệu tổng ngày
    $totals_day = render_data_total('day');
    foreach ($totals_day as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            $xtpl->assign('sub_label', $subkey == 'sale' ? $lang_module['vnd'] : $lang_module[$subkey]);
            $xtpl->assign('TOTAL', $subvalue);
            $xtpl->parse('main.TOTAL_DAILY.row.loop');
        }
        $xtpl->assign('label', $lang_module[$key]);
        $xtpl->parse('main.TOTAL_DAILY.row');
    }
    $xtpl->parse('main.TOTAL_DAILY');

    //Hiển thị số liệu tổng tháng
    $totals_month = render_data_total('month');
    foreach ($totals_month as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            $xtpl->assign('sub_label', $subkey == 'sale' ? $lang_module['vnd'] : $lang_module[$subkey]);
            $xtpl->assign('TOTAL', $subvalue);
            $xtpl->parse('main.TOTAL_MONTH.row.loop');
        }
        if (count($_group_value) < 3) {
            $xtpl->parse('main.TOTAL_MONTH.row.td');
        }
        $xtpl->assign('label', $lang_module[$key]);
        $xtpl->parse('main.TOTAL_MONTH.row');
    }
    $xtpl->parse('main.TOTAL_MONTH');

    //Trạng thái báo cáo -> Dành cho ASM
    $report_statics = check_report_static();
    foreach ($report_statics as $key => $value) {
        $xtpl->assign('DSS', 'DSS NAME');
        $xtpl->parse('main.REPORT_STATICS.ROW');
    }
    $xtpl->parse('main.REPORT_STATICS');

    //ACTION_NOTE
    $action_content = get_action_note($user_info['userid']);
    $xtpl->assign('CONTENT_NOTE', $action_content);
    $xtpl->parse('main.ACTION_NOTE');

    if (!empty($error)) {
        $xtpl->assign('ERROR', implode('<br />', $error));
        $xtpl->parse('main.error');
    }

    $xtpl->assign('USERNAME', $user_info['last_name'] . ' ' . $user_info['first_name']);
    $xtpl->assign('CURRENT_DATE', nv_date('d/m/Y', NV_CURRENTTIME));
    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_report_main_sales()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_report_main_sales()
{
    global $module_info, $lang_module, $user_info, $op, $module_file, $db, $module_data, $array_infor_users;

    // Fetch Limit
    $db->sqlreset()
        ->select('*')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows')
        ->order('id DESC');
    $sth = $db->prepare($db->sql());
    $sth->execute();

    $xtpl = new XTemplate('main_sale.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
    $xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    $xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
    $xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
    $xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
    $xtpl->assign('OP', $op);

    //Hiển thị Số liệu tổng ngày
    $totals_day = render_data_total('day');
    foreach ($totals_day as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            $xtpl->assign('sub_label', $subkey == 'sale' ? $lang_module['vnd'] : $lang_module[$subkey]);
            $xtpl->assign('TOTAL', $subvalue);
            $xtpl->parse('main.TOTAL_DAILY.row.loop');
        }
        $xtpl->assign('label', $lang_module[$key]);
        $xtpl->parse('main.TOTAL_DAILY.row');
    }
    $xtpl->parse('main.TOTAL_DAILY');

    //Hiển thị số liệu tổng tháng
    $totals_month = render_data_total('month');
    foreach ($totals_month as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            $xtpl->assign('sub_label', $subkey == 'sale' ? $lang_module['vnd'] : $lang_module[$subkey]);
            $xtpl->assign('TOTAL', $subvalue);
            $xtpl->parse('main.TOTAL_MONTH.row.loop');
        }
        if (count($_group_value) < 3) {
            $xtpl->parse('main.TOTAL_MONTH.row.td');
        }
        $xtpl->assign('label', $lang_module[$key]);
        $xtpl->parse('main.TOTAL_MONTH.row');
    }
    $xtpl->parse('main.TOTAL_MONTH');


    //ACTION_NOTE
    $action_content = get_action_note($user_info['userid']);
    $xtpl->assign('CONTENT_NOTE', $action_content);
    $xtpl->parse('main.ACTION_NOTE');


    if (!empty($error)) {
        $xtpl->assign('ERROR', implode('<br />', $error));
        $xtpl->parse('main.error');
    }

    $xtpl->assign('USERNAME', $user_info['last_name'] . ' ' . $user_info['first_name']);
    $xtpl->assign('CURRENT_DATE', nv_date('d/m/Y', NV_CURRENTTIME));
    $xtpl->parse('main');
    return $xtpl->text('main');
}


/**
 * nv_theme_report_team_manager()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_report_team_manager($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}
