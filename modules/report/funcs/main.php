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

$sale_code = $array_infor_users[$user_info['userid']]['code'];
$team_id = '';

if (defined('NV_IS_MODADMIN') or $leader_team > 0) {
    $contents = nv_theme_report_main_manager();
} else {
    $contents = nv_theme_report_main_sales();
}

$page_title = $lang_module['monitor'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
