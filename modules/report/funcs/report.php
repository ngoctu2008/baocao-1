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

$now_time = intval(nv_date('H', NV_CURRENTTIME));
if ($now_time >= $time_over[1] or $now_time < $time_over[0]) {
	$redirect = nv_url_rewrite(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=list-report', true);
	$notification = sprintf($lang_module['over_time'], $time_over[0], $time_over[1]);
	$contents = nv_theme_alert($notification, $lang_module['waiting_redirect'], 'warning', $redirect, $lang_module['redirect'], 2);
	include NV_ROOTDIR . '/includes/header.php';
	echo nv_site_theme($contents);
	include NV_ROOTDIR . '/includes/footer.php';
	exit();
}


$row = [];
$error = [];
$row['id'] = $nv_Request->get_int('id', 'post,get', 0);
if ($nv_Request->isset_request('submit', 'post')) {
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
	$row['pl_app'] = $nv_Request->get_int('pl_app', 'post', 0);
	$row['pl_loan'] = $nv_Request->get_int('pl_loan', 'post', 0);
	$row['dn_app'] = $nv_Request->get_int('dn_app', 'post', 0);
	$row['dn_loan'] = $nv_Request->get_int('dn_loan', 'post', 0);
	$row['xstu_check'] = $nv_Request->get_int('xstu_check', 'post', 0);
	$row['xstu_app'] = $nv_Request->get_int('xstu_app', 'post', 0);
	$row['xstu_loan'] = $nv_Request->get_int('xstu_loan', 'post', 0);
	$row['ipp_app'] = $nv_Request->get_int('ipp_app', 'post', 0);
	$row['ipp_loan'] = $nv_Request->get_int('ipp_loan', 'post', 0);
	$row['banca_hd'] = $nv_Request->get_int('banca_hd', 'post', 0);
	$row['banca_sale'] = intval(str_replace('.', '', $nv_Request->get_title('banca_sale', 'post', 0)));
	// $row['banca_sale'] = str_replace(',', '', $nv_Request->get_title('banca_sale', 'post', 0));
	$row['ubank_app'] = $nv_Request->get_int('ubank_app', 'post', 0);
	$row['ubank_loan'] = $nv_Request->get_int('ubank_loan', 'post', 0);
	$row['courier_lead'] = $nv_Request->get_int('courier_lead', 'post', 0);
	$row['courier_app'] = $nv_Request->get_int('courier_app', 'post', 0);
	$row['courier_loan'] = $nv_Request->get_int('courier_loan', 'post', 0);
	$row['credit_app'] = $nv_Request->get_int('credit_app', 'post', 0);
	$row['credit_loan'] = $nv_Request->get_int('credit_loan', 'post', 0);
	$row['smartpos_app'] = $nv_Request->get_int('smartpos_app', 'post', 0);
	$row['smartpos_loan'] = $nv_Request->get_int('smartpos_loan', 'post', 0);

	$row['vpbank_app'] = $nv_Request->get_int('vpbank_app', 'post', 0);
	$row['vpbank_loan'] = $nv_Request->get_int('vpbank_loan', 'post', 0);
	$row['sfc_lead'] = $nv_Request->get_int('sfc_lead', 'post', 0);
	$row['sfc_fullpaid'] = $nv_Request->get_int('sfc_fullpaid', 'post', 0);


	if (empty($row['date'])) {
		$error[] = $lang_module['error_required_date'];
	} elseif (empty($row['code'])) {
		$error[] = $lang_module['error_required_code'];
	} elseif (!check_number($row['pl_app'])) {
		$error[] = $lang_module['error_required_pl_app'];
	} elseif (!check_number($row['pl_loan'])) {
		$error[] = $lang_module['error_required_pl_loan'];
	} elseif (!check_number($row['dn_app'])) {
		$error[] = $lang_module['error_required_dn_app'];
	} elseif (!check_number($row['dn_loan'])) {
		$error[] = $lang_module['error_required_dn_loan'];
	} elseif (!check_number($row['xstu_check'])) {
		$error[] = $lang_module['error_required_xstu_check'];
	} elseif (!check_number($row['xstu_app'])) {
		$error[] = $lang_module['error_required_xstu_app'];
	} elseif (!check_number($row['xstu_loan'])) {
		$error[] = $lang_module['error_required_xstu_loan'];
	} elseif (!check_number($row['ipp_app'])) {
		$error[] = $lang_module['error_required_ipp_app'];
	} elseif (!check_number($row['ipp_loan'])) {
		$error[] = $lang_module['error_required_ipp_loan'];
	} elseif (!check_number($row['banca_hd'])) {
		$error[] = $lang_module['error_required_banca_hd'];
	} elseif (!check_number($row['ubank_app'])) {
		$error[] = $lang_module['error_required_ubank_app'];
	} elseif (!check_number($row['ubank_loan'])) {
		$error[] = $lang_module['error_required_ubank_loan'];
	} elseif (!check_number($row['courier_lead'])) {
		$error[] = $lang_module['error_required_courier_lead'];
	} elseif (!check_number($row['courier_app'])) {
		$error[] = $lang_module['error_required_courier_app'];
	} elseif (!check_number($row['courier_loan'])) {
		$error[] = $lang_module['error_required_courier_loan'];
	} elseif (!check_number($row['credit_app'])) {
		$error[] = $lang_module['error_required_credit_app'];
	} elseif (!check_number($row['credit_loan'])) {
		$error[] = $lang_module['error_required_credit_loan'];
	} elseif (!check_number($row['smartpos_app'])) {
		$error[] = $lang_module['error_required_smartpos_app'];
	} elseif (!check_number($row['smartpos_loan'])) {
		$error[] = $lang_module['error_required_smartpos_loan'];
	}

	//Kiểm tra code + ngày xem đã trùng dữ liệu chưa
	$_sql = 'SELECT code, date FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows where code = "' . $row['code'] . '" AND date = ' . $row['date'];
	$_row = $db->query($_sql)->fetch();

	if (!empty($_row) and empty($row['id'])) { //Nếu tồn tại nhưng không phải trạng thái sửa thì báo lỗi
		$error[] = sprintf($lang_module['error_duplicated'], $row['code'], nv_date('d/m/Y', $row['date']));
	}

	if (empty($error)) {
		try {
			if (empty($row['id'])) {
				$stmt = $db->prepare('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_rows (date, code, pl_app, pl_loan, dn_app, dn_loan, xstu_check, xstu_app, xstu_loan, ipp_app, ipp_loan, banca_hd, banca_sale, ubank_app, ubank_loan, courier_lead, courier_app, courier_loan, credit_app, credit_loan, smartpos_app, smartpos_loan, vpbank_app, vpbank_loan, sfc_lead, sfc_fullpaid) VALUES (:date, :code, :pl_app, :pl_loan, :dn_app, :dn_loan, :xstu_check, :xstu_app, :xstu_loan, :ipp_app, :ipp_loan, :banca_hd, 
                :banca_sale, :ubank_app, :ubank_loan, :courier_lead, :courier_app, :courier_loan, :credit_app, :credit_loan, :smartpos_app, :smartpos_loan,:vpbank_app, :vpbank_loan, :sfc_lead, :sfc_fullpaid)');

				$stmt->bindParam(':date', $row['date'], PDO::PARAM_INT);
				$stmt->bindParam(':code', $row['code'], PDO::PARAM_STR);
			} else {
				$stmt = $db->prepare('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_rows SET pl_app = :pl_app, pl_loan = :pl_loan, dn_app = :dn_app, dn_loan = :dn_loan, xstu_check = :xstu_check, xstu_app = :xstu_app, xstu_loan = :xstu_loan, ipp_app = :ipp_app, ipp_loan = :ipp_loan, banca_hd = :banca_hd, banca_sale = :banca_sale, ubank_app = :ubank_app, ubank_loan = :ubank_loan, courier_lead = :courier_lead, courier_app = :courier_app, courier_loan = :courier_loan, credit_app = :credit_app, credit_loan = :credit_loan, smartpos_app =:smartpos_app, smartpos_loan = :smartpos_loan, vpbank_app = :vpbank_app, vpbank_loan =:vpbank_loan, sfc_lead = :sfc_lead, sfc_fullpaid = :sfc_fullpaid WHERE id=' . $row['id']);
			}
			$stmt->bindParam(':pl_app', $row['pl_app'], PDO::PARAM_INT);
			$stmt->bindParam(':pl_loan', $row['pl_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':dn_app', $row['dn_app'], PDO::PARAM_INT);
			$stmt->bindParam(':dn_loan', $row['dn_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':xstu_check', $row['xstu_check'], PDO::PARAM_INT);
			$stmt->bindParam(':xstu_app', $row['xstu_app'], PDO::PARAM_INT);
			$stmt->bindParam(':xstu_loan', $row['xstu_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':ipp_app', $row['ipp_app'], PDO::PARAM_INT);
			$stmt->bindParam(':ipp_loan', $row['ipp_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':banca_hd', $row['banca_hd'], PDO::PARAM_INT);
			$stmt->bindParam(':banca_sale', $row['banca_sale'], PDO::PARAM_INT);
			$stmt->bindParam(':ubank_app', $row['ubank_app'], PDO::PARAM_INT);
			$stmt->bindParam(':ubank_loan', $row['ubank_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':courier_lead', $row['courier_lead'], PDO::PARAM_INT);
			$stmt->bindParam(':courier_app', $row['courier_app'], PDO::PARAM_INT);
			$stmt->bindParam(':courier_loan', $row['courier_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':credit_app', $row['credit_app'], PDO::PARAM_INT);
			$stmt->bindParam(':credit_loan', $row['credit_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':smartpos_app', $row['smartpos_app'], PDO::PARAM_INT);
			$stmt->bindParam(':smartpos_loan', $row['smartpos_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':vpbank_app', $row['vpbank_app'], PDO::PARAM_INT);
			$stmt->bindParam(':vpbank_loan', $row['vpbank_loan'], PDO::PARAM_INT);
			$stmt->bindParam(':sfc_lead', $row['sfc_lead'], PDO::PARAM_INT);
			$stmt->bindParam(':sfc_fullpaid', $row['sfc_fullpaid'], PDO::PARAM_INT);

			$exc = $stmt->execute();
			if ($exc) {
				$nv_Cache->delMod($module_name);
				if (empty($row['id'])) {
					nv_insert_logs(NV_LANG_DATA, $module_name, 'Add Report', 'Date: ' . nv_date('d/m/Y', $row['date']) . ', Sale code: ' . $row['code'], $user_info['userid']);
				} else {
					nv_insert_logs(NV_LANG_DATA, $module_name, 'Edit Report', 'ID: ' . $row['id'], $user_info['userid']);
				}

				$redirect = nv_url_rewrite(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=main', true);
				$contents = nv_theme_alert($lang_module['success'], $lang_module['waiting_redirect'], 'success', $redirect, $lang_module['redirect'], 1);
				include NV_ROOTDIR . '/includes/header.php';
				echo nv_site_theme($contents);
				include NV_ROOTDIR . '/includes/footer.php';
				exit();
				// nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
			}
		} catch (PDOException $e) {
			trigger_error($e->getMessage());
			die($e->getMessage()); //Remove this line after checks finished
		}
	}
} elseif ($row['id'] > 0) {
	$row = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_rows WHERE id=' . $row['id'])->fetch();
	$today = mktime(0, 0, 0, nv_date('n', NV_CURRENTTIME), nv_date('j', NV_CURRENTTIME), nv_date('Y', NV_CURRENTTIME));
	if (empty($row)) {
		nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
	} elseif ($row['date'] < $today) {
		nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=' . $op);
	}
} else {
	// $row['id'] = 0;
	// $row['date'] = 0;
	// $row['code'] = '';
	// $row['pl_app'] = 0;
	// $row['pl_loan'] = 0;
	// $row['dn_app'] = 0;
	// $row['dn_loan'] = 0;
	// $row['xstu_check'] = 0;
	// $row['xstu_app'] = 0;
	// $row['xstu_loan'] = 0;
	// $row['ipp_app'] = 0;
	// $row['ipp_loan'] = 0;
	// $row['banca_hd'] = 0;
	// $row['banca_sale'] = 0;
	// $row['ubank_app'] = 0;
	// $row['ubank_loan'] = 0;
	// $row['courier_lead'] = 0;
	// $row['courier_app'] = 0;
	// $row['courier_loan'] = 0;
	// $row['credit_app'] = 0;
	// $row['credit_loan'] = 0;
}

if (empty($row['date'])) {
	$row['date'] = nv_date('d/m/Y', NV_CURRENTTIME);
} else {
	$row['date'] = nv_date('d/m/Y', $row['date']);
}

if (!empty($row['banca_sale'])) {
	$row['banca_sale'] = number_format($row['banca_sale'], 0, ',', '.');
}

if ($row['id'] > 0) {
	$sale_code = $row['code'];
	$sale_name = displayName($array_code_users[$row['code']]);
} else {
	$_sql = 'SELECT code FROM ' . $db_config['prefix'] . '_users_info where userid = ' . $user_info['userid'];
	$_row = $db->query($_sql)->fetch();
	$sale_code = $_row['code'];
	$sale_name = $user_info['last_name'] . ' ' . $user_info['first_name'];
}



$xtpl = new XTemplate('report.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file);
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
$xtpl->assign('SALE_CODE', $sale_code);
$xtpl->assign('SALE_NAME', $sale_name);

if (!empty($error)) {
	$xtpl->assign('ERROR', implode('<br />', $error));
	$xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title = $lang_module['report'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
