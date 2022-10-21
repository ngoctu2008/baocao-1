<?php

/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$module_version = [
    'name' => 'Report',
    'modfuncs' => 'main,report,list-report, action-note, listaction, plans',
    'change_alias' => 'main,report,list-report,action-note,listaction, plans',
    'submenu' => 'main,report,list-report,action-note,listaction, plans',
    'is_sysmod' => 0,
    'virtual' => 0,
    'version' => '4.3.03',
    'date' => 'Wed, 21 Sep 2022 04:14:05 GMT',
    'author' => ' (tuanpb1988@gmail.com)',
    'uploads_dir' => [$module_name],
    'note' => 'Module Báo cáo doanh số'
];
