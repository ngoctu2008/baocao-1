<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Tuấn Phạm <tuanpb1988@gmail.com>
 * @Copyright (C) 2023 Tuấn Phạm. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 15 Feb 2023 15:38:52 GMT
 */

if (!defined('NV_IS_FILE_SITEINFO')) {
    die('Stop!!!');
}

$lang_siteinfo = nv_get_lang_module($mod);

/*
// Tổng số bài viết
$number = $db->query('SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_rows where status= 1 AND publtime < ' . NV_CURRENTTIME . ' AND (exptime=0 OR exptime>' . NV_CURRENTTIME . ')')->fetchColumn();
if ($number > 0) {
    $siteinfo[] = [
        'key' => $lang_siteinfo['siteinfo_publtime'],
        'value' => $number
    ];
}
*/
