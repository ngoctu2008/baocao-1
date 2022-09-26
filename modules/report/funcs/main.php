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

$error = [];

$sale_code = $array_infor_users[$user_info['userid']]['code'];
$team_id = $array_infor_users[$user_info['userid']]['group_id'];

// echo displayArray($array_team_users[$team_id]);
// exit();

if (defined('NV_IS_MODADMIN')) {
    $level = 'admin';
    $list_code = '';
} elseif ($leader_team > 0) {
    $level = 'team_manager';
    $list_code = $array_team_users[$team_id];
} else {
    $level = 'sale';
    $list_code = $sale_code;
}
$contents = nv_theme_report_main($level, $list_code);

$page_title = $lang_module['monitor'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
