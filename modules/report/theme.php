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
function nv_theme_report_main()
{
    global $module_info, $lang_module, $user_info, $op, $module_file, $db, $module_data, $codes_in_team, $level;

    if (is_array($codes_in_team)) {
        $listcode = implode('","', $codes_in_team);
    } else {
        $listcode = $codes_in_team;
    }

    if ($level == 'admin') {
        $where = '';
    } else {
        $where = 'code IN ("' . $listcode . '")';
    }
    // Fetch Limit
    $db->sqlreset()
        ->select('*')
        ->from('' . NV_PREFIXLANG . '_' . $module_data . '_rows')
        ->order('id DESC');
    $db->where($where);
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

    //Hiển thị Bảng thu nhập
    if ($level == 1) {
        $appellation = 'Vùng';
    } elseif ($level == 2) {
        $appellation = 'Team';
    }

    $xtpl->assign('label_income_date', sprintf($lang_module['income_date'], $appellation));
    $xtpl->assign('label_income_month', sprintf($lang_module['income_month'], $appellation));
    $xtpl->parse('main.INCOME');


    //Hiển thị Số liệu tổng ngày
    $totals_day = render_data_total('day', $codes_in_team);
    foreach ($totals_day as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            if ($subkey == 'sale') {
                $subkey = $lang_module['vnd'];
                $subvalue = number_format($subvalue, 0, ',', '.');
            } else {
                $subkey = $lang_module[$subkey];
            }
            $xtpl->assign('sub_label', $subkey);
            $xtpl->assign('TOTAL', $subvalue);
            $xtpl->parse('main.TOTAL_DAILY.row.loop');
        }
        $xtpl->assign('label', $lang_module[$key]);
        $xtpl->parse('main.TOTAL_DAILY.row');
    }
    // $xtpl->assign('link_export', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=list-report?export=1');
    $xtpl->parse('main.TOTAL_DAILY');

    //Hiển thị số liệu tổng tháng
    $totals_month = render_data_total('month', $codes_in_team);
    foreach ($totals_month as $key => $_group_value) {
        foreach ($_group_value as $subkey => $subvalue) {
            if ($subkey == 'sale') {
                $subkey = $lang_module['vnd'];
                $subvalue = number_format($subvalue, 0, ',', '.');
            } else {
                $subkey = $lang_module[$subkey];
            }
            $xtpl->assign('sub_label', $subkey);
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
    if ($level == 1) {
        $report_statics = check_report_static_area($level);
        $area_num_sale = 0; //Số sale đã báo cáo
        $area_total_sale = 0; //Số sale toàn area
        if (!empty($report_statics)) {
            foreach ($report_statics as $row) {
                $area_num_sale += $row['num_sale'];
                $area_total_sale += $row['total'];
                $xtpl->assign('STATIC', $row);
                $xtpl->parse('main.REPORT_STATICS.ROW');
            }
            $xtpl->assign('num_sale', $area_num_sale);
            $xtpl->assign('total_sale', $area_total_sale);
            $xtpl->assign('percent', number_format($area_num_sale / $area_total_sale, 2) * 100);
            $xtpl->parse('main.REPORT_STATICS');
        }
    }

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
