<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
	die('Stop!!!');
}

$array_config = [];
$error = [];

if ($nv_Request->isset_request('submit', 'post')) {
	$array_config['valid_time'] = $nv_Request->get_title('valid_time', 'post,get', '8-22');
	$array_config['showname_ormat'] = $nv_Request->get_title('showname_format', 'post,get', '');

	if (empty($array_config['valid_time'])) {
		$error[] = $lang_module['require_valid_time'];
	} else {
		$time = explode('-', $array_config['valid_time']);
		if (empty($time) or (0 < $time[0]) or ($time[1] > 24)) {
			$error[] = $lang_module['err_valid_time'] . $time[0] . $time[1];
		}
		if ($time[0] >= $time[1]) {
			$error[] = $lang_module['err_valid_time'];
		}
	}
	if (empty($error)) {
		try {
			$sth = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_config SET config_value = :config_value WHERE config_name = :config_name');
			foreach ($array_config as $config_name => $config_value) {
				$sth->bindParam(':config_name', $config_name, PDO::PARAM_STR);
				$sth->bindParam(':config_value', $config_value, PDO::PARAM_STR);
				$exc = $sth->execute();
				if ($exc) {
					nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Config', 'New Config: ' . $config_name . ' = ' . $config_value, $admin_info['userid']);
				}
			}
			$nv_Cache->delMod($module_name);

			nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
		} catch (PDOException $e) {
			trigger_error($e->getMessage());
			die($e->getMessage()); //Remove this line after checks finished
		}
	}
} else {
	$sql = 'SELECT config_name, config_value FROM ' . NV_PREFIXLANG . '_' . $module_data . '_config';
	$result = $db->query($sql);
	while (list($c_config_name, $c_config_value) = $result->fetch(3)) {
		$array_config[$c_config_name] = $c_config_value;
	}
}
$xtpl = new XTemplate('config.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('MODULE_UPLOAD', $module_upload);
$xtpl->assign('NV_ASSETS_DIR', NV_ASSETS_DIR);
$xtpl->assign('OP', $op);
$xtpl->assign('ROW', $array_config);


if (!empty($error)) {
	$xtpl->assign('ERROR', implode('<br />', $error));
	$xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['config'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
