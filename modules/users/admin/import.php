<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.com)
 * @Copyright (C) 2014 mynukeviet. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 13-08-2017 15:49
 */
if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

if (!class_exists('PHPExcel')) {
    if (file_exists(NV_ROOTDIR . '/includes/class/PHPExcel.php')) {
        require_once NV_ROOTDIR . '/includes/class/PHPExcel.php';
    }
}

if (!class_exists('PHPExcel')) {
    $contents = nv_theme_alert($lang_module['phpexcel_not_exists_title'], $lang_module['phpexcel_not_exists_content'], 'danger');
    include NV_ROOTDIR . '/includes/header.php';
    echo nv_admin_theme($contents);
    include NV_ROOTDIR . '/includes/footer.php';
}

$startCol = 'A';
$startRow = 5;

function nv_users_field_check($custom_fields, $check = 1)
{
    global $db, $global_config, $lang_module;

    $query_field = $array_error = array();
    $array_field_config = array();
    $result_field = $db->query('SELECT * FROM ' . NV_MOD_TABLE . '_field ORDER BY weight ASC');
    while ($row_field = $result_field->fetch()) {
        $language = unserialize($row_field['language']);
        $row_field['title'] = (isset($language[NV_LANG_DATA])) ? $language[NV_LANG_DATA][0] : $row['field'];
        $row_field['description'] = (isset($language[NV_LANG_DATA])) ? nv_htmlspecialchars($language[NV_LANG_DATA][1]) : '';
        if (!empty($row_field['field_choices'])) {
            $row_field['field_choices'] = unserialize($row_field['field_choices']);
        } elseif (!empty($row_field['sql_choices'])) {
            $row_field['sql_choices'] = explode('|', $row_field['sql_choices']);
            $query = 'SELECT ' . $row_field['sql_choices'][2] . ', ' . $row_field['sql_choices'][3] . ' FROM ' . $row_field['sql_choices'][1];
            $result = $db->query($query);
            $weight = 0;
            while (list ($key, $val) = $result->fetch(3)) {
                $row_field['field_choices'][$key] = $val;
            }
        }
        $array_field_config[$row_field['field']] = $row_field;
    }

    foreach ($array_field_config as $row_f) {
        $value = (isset($custom_fields[$row_f['field']])) ? $custom_fields[$row_f['field']] : '';
        $field_input_name = empty($row_f['system']) ? 'custom_fields[' . $row_f['field'] . ']' : $row_f['field'];
        if ($value != '') {
            if ($row_f['field_type'] == 'number') {
                $number_type = $row_f['field_choices']['number_type'];
                $pattern = ($number_type == 1) ? '/^[0-9]+$/' : '/^[0-9\.]+$/';

                if (!preg_match($pattern, $value)) {
                    $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                } else {
                    $value = ($number_type == 1) ? intval($value) : floatval($value);

                    if ($value < $row_f['min_length'] or $value > $row_f['max_length']) {
                        $array_error[] = sprintf($lang_module['field_min_max_value'], $row_f['title'], $row_f['min_length'], $row_f['max_length']);
                    }
                }
            } elseif ($row_f['field_type'] == 'date') {
                if (preg_match('/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{4})$/', $value, $m)) {
                    $m[1] = intval($m[1]);
                    $m[2] = intval($m[2]);
                    $m[3] = intval($m[3]);
                    $value = mktime(0, 0, 0, $m[2], $m[1], $m[3]);

                    if ($row_f['min_length'] > 0 and ($value < $row_f['min_length'] or $value > $row_f['max_length'])) {
                        $array_error[] = sprintf($lang_module['field_min_max_value'], $row_f['title'], date('d/m/Y', $row_f['min_length']), date('d/m/Y', $row_f['max_length']));
                    } elseif ($row_f['field'] == 'birthday' and !empty($global_users_config['min_old_user']) and ($m[3] > (date('Y') - $global_users_config['min_old_user']) or ($m[3] == (date('Y') - $global_users_config['min_old_user']) and ($m[2] > date('n') or ($m[2] == date('n') and $m[1] > date('j')))))) {
                        $array_error[] = sprintf($lang_module['old_min_user_error'], $global_users_config['min_old_user']);
                    }
                } else {
                    $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                }
            } elseif ($row_f['field_type'] == 'textbox') {
                if ($row_f['match_type'] == 'alphanumeric') {
                    if (!preg_match('/^[a-zA-Z0-9\_]+$/', $value)) {
                        $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                    }
                } elseif ($row_f['match_type'] == 'email') {
                    if (($error = nv_check_valid_email($value)) != '') {
                        $array_error[] = $error;
                    }
                } elseif ($row_f['match_type'] == 'url') {
                    if (!nv_is_url($value)) {
                        $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                    }
                } elseif ($row_f['match_type'] == 'regex') {
                    if (!preg_match('/' . $row_f['match_regex'] . '/', $value)) {
                        $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                    }
                } elseif ($row_f['match_type'] == 'callback') {
                    if (function_exists($row_f['func_callback'])) {
                        if (!call_user_func($row_f['func_callback'], $value)) {
                            $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                        }
                    } else {
                        $array_error[] = 'error function not exists ' . $row_f['func_callback'];
                    }
                } else {
                    $value = nv_htmlspecialchars($value);
                }

                $strlen = nv_strlen($value);

                if ($strlen < $row_f['min_length'] or $strlen > $row_f['max_length']) {
                    $array_error[] = sprintf($lang_module['field_min_max_error'], $row_f['title'], $row_f['min_length'], $row_f['max_length']);
                }
            } elseif ($row_f['field_type'] == 'textarea' or $row_f['field_type'] == 'editor') {
                $allowed_html_tags = array_map('trim', explode(',', NV_ALLOWED_HTML_TAGS));
                $allowed_html_tags = '<' . implode('><', $allowed_html_tags) . '>';
                $value = strip_tags($value, $allowed_html_tags);
                if ($row_f['match_type'] == 'regex') {
                    if (!preg_match('/' . $row_f['match_regex'] . '/', $value)) {
                        $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                    }
                } elseif ($row_f['match_type'] == 'callback') {
                    if (function_exists($row_f['func_callback'])) {
                        if (!call_user_func($row_f['func_callback'], $value)) {
                            $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                        }
                    } else {
                        $array_error[] = 'error function not exists ' . $row_f['func_callback'];
                    }
                }

                $value = ($row_f['field_type'] == 'textarea') ? nv_nl2br($value, '<br />') : $value;
                $strlen = nv_strlen($value);

                if ($strlen < $row_f['min_length'] or $strlen > $row_f['max_length']) {
                    $array_error[] = sprintf($lang_module['field_min_max_error'], $row_f['title'], $row_f['min_length'], $row_f['max_length']);
                }
            } elseif ($row_f['field_type'] == 'checkbox' or $row_f['field_type'] == 'multiselect') {
                $temp_value = array();
                foreach ($value as $value_i) {
                    if (isset($row_f['field_choices'][$value_i])) {
                        $temp_value[] = $value_i;
                    }
                }

                $value = implode(',', $temp_value);
            } elseif ($row_f['field_type'] == 'select' or $row_f['field_type'] == 'radio') {
                if (!isset($row_f['field_choices'][$value])) {
                    $array_error[] = sprintf($lang_module['field_match_type_error'], $row_f['title']);
                }
            }

            $custom_fields[$row_f['field']] = $value;
        }

        if (empty($value) and $row_f['required']) {
            $array_error[] = sprintf($lang_module['field_match_type_required'], $row_f['title']);
        }

        if (empty($row_f['system'])) {
            if (!empty($userid)) {
                $query_field[] = $row_f['field'] . '=' . $db->quote($value);
            } else {
                $query_field[$row_f['field']] = $db->quote($value);
            }
        }
    }
    if ($check) {
        return $array_error;
    }
    return $query_field;
}

function nv_get_field()
{
    global $db, $module_data, $lang_module;

    // trường dữ liệu mặc định
    $array_field = array(
        'username' => array(
            'field' => 'username',
            'text' => $lang_module['username'],
            'required' => 1,
            'comment' => $lang_module['comment_username']
        ),
        'password' => array(
            'field' => 'password',
            'text' => $lang_module['password'],
            'required' => 1,
            'comment' => $lang_module['comment_password']
        ),
        'email' => array(
            'field' => 'email',
            'text' => $lang_module['email'],
            'required' => 1,
            'comment' => ''
        )
    );

    // trường dữ liệu tùy biến
    $array_allow_field = array(
        'number',
        'date',
        'textbox',
        'textarea',
        'editor',
        'select',
        'radio'
    );

    $result_field = $db->query('SELECT * FROM ' . NV_MOD_TABLE . '_field ORDER BY weight ASC');
    while ($row_field = $result_field->fetch()) {
        if (in_array($row_field['field_type'], $array_allow_field)) {
            $language = unserialize($row_field['language']);
            $row_field['title'] = (isset($language[NV_LANG_DATA])) ? $language[NV_LANG_DATA][0] : $row['field'];
            $row_field['description'] = (isset($language[NV_LANG_DATA])) ? nv_htmlspecialchars($language[NV_LANG_DATA][1]) : '';
            if (!empty($row_field['field_choices'])) {
                $row_field['field_choices'] = unserialize($row_field['field_choices']);
            } elseif (!empty($row_field['sql_choices'])) {
                $row_field['sql_choices'] = explode('|', $row_field['sql_choices']);
                $query = 'SELECT ' . $row_field['sql_choices'][2] . ', ' . $row_field['sql_choices'][3] . ' FROM ' . $row_field['sql_choices'][1];
                $result = $db->query($query);
                $weight = 0;
                while (list ($key, $val) = $result->fetch(3)) {
                    $row_field['field_choices'][$key] = $val;
                }
            }

            $comment = '';
            if (!empty($row_field['system'])) {
                if ($row_field['field'] == 'birthday') {
                    $comment .= 'dd/mm/YYYY';
                } elseif ($row_field['field'] == 'sig') {
                    $comment = sprintf($lang_module['comment_sig'], $row_field['min_length'], $row_field['max_length']);
                }
                if ($row_field['required']) {
                    //
                }
                if ($row_field['description']) {
                    //
                }
                if ($row_field['field'] == 'gender') {
                    $comment = $lang_module['comment_gender'];
                }
            } else {
                if ($row_field['required']) {
                    //
                }
                if ($row_field['description']) {
                    //
                }
                if ($row_field['field_type'] == 'textbox' or $row_field['field_type'] == 'number') {} elseif ($row_field['field_type'] == 'date') {
                    //
                } elseif ($row_field['field_type'] == 'textarea') {
                    //
                } elseif ($row_field['field_type'] == 'editor') {
                    //
                } elseif ($row_field['field_type'] == 'select') {
                    //
                } elseif ($row_field['field_type'] == 'radio') {
                    //
                }
            }

            $array_field[$row_field['field']] = array(
                'field' => $row_field['field'],
                'text' => $row_field['title'],
                'required' => $row_field['required'],
                'comment' => $comment
            );
        }
    }

    return $array_field;
}

if ($nv_Request->isset_request('guide', 'post')) {

    $array_field = nv_get_field();

    $xtpl = new XTemplate('import.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('URL_DOWNLOAD', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=import&download=1');

    foreach ($array_field as $data) {
        $data['required'] = $lang_module['required_' . $data['required']];
        $xtpl->assign('DATA', $data);
        $xtpl->parse('guide.loop');
    }

    $xtpl->parse('guide');
    $contents = $xtpl->text('guide');
    nv_htmlOutput($contents);
}

if ($nv_Request->isset_request('download', 'get')) {
    $array_field = nv_get_field();
    nv_users_download($array_field, 'xls');
}

if ($nv_Request->isset_request('upload', 'post')) {
    if (isset($_FILES['file']) and is_uploaded_file($_FILES['file']['tmp_name'])) {
        $filename = nv_string_to_filename($_FILES['file']['name']);
        $file = NV_ROOTDIR . '/' . NV_TEMP_DIR . '/' . $filename;

        if (file_exists($file)) {
            unlink($file);
        }

        if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            $objPHPExcel = PHPExcel_IOFactory::load($file);
            $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
            $highestRow = $objWorksheet->getHighestRow();
            $highestColumn = $objWorksheet->getHighestColumn();

            $array_data = array();
            for ($row = $startRow; $row <= $highestRow; $row++) {
                $col = 0;
                for ($column = $startCol; $column <= $highestColumn; $column++) {
                    $array_data[$row][$col] = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
                    $col++;
                }
            }

            nv_jsonOutput(array(
                'error' => 0,
                'filename' => $filename,
                'total' => sizeof($array_data),
                'data' => $array_data
            ));
        }
    }
    nv_jsonOutput(array(
        'error' => 1,
        'msg' => $lang_module['error_required_file']
    ));
}

if ($nv_Request->isset_request('readline', 'post')) {
    $check = $nv_Request->get_int('check', 'post', 0);
    $current = $nv_Request->get_int('current', 'post', $startRow);
    $filename = $nv_Request->get_title('file_name', 'post', '');
    $file = NV_ROOTDIR . '/' . NV_TEMP_DIR . '/' . $filename;

    if (!empty($current) and file_exists($file)) {
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
        $highestColumn = $objWorksheet->getHighestColumn();
        $highestRow = $objWorksheet->getHighestRow();

        $array_data = $objWorksheet->rangeToArray('A' . $current . ':' . $highestColumn . $current)[0];
        $array_data = array_map('nv_replate_null', $array_data);
        $array_data = array_combine(array_keys(nv_get_field()), $array_data);

        $exit = $current == $highestRow ? 1 : 0;

        $array_data_tmp = $array_data;
        unset($array_data_tmp['username'], $array_data_tmp['password'], $array_data_tmp['email']);
        $custom_fields = $array_data_tmp;

        $array_error = array();
        foreach ($array_data as $field => $value) {
            if ($check) {
                // nếu chế độ kiểm tra dữ liệu
                if ($field == 'username') {

                    // kiểm tra username hợp lệ
                    if (($error_username = nv_check_valid_login($value, $global_config['nv_unickmax'], $global_config['nv_unickmin'])) != '') {
                        $array_error[] = $error_username;
                    }

                    // Kiểm tra username trong danh sách cấm
                    if ("'" . $value . "'" != $db->quote($value)) {
                        $array_error[] = $lang_module['error_deny_name'];
                    }

                    // kiểm tra username tồn tại chưa
                    $md5username = nv_md5safe($value);
                    $stmt = $db->prepare('SELECT userid FROM ' . NV_MOD_TABLE . ' WHERE md5username= :md5username');
                    $stmt->bindParam(':md5username', $md5username, PDO::PARAM_STR);
                    $stmt->execute();
                    $query_error_username = $stmt->fetchColumn();
                    if ($query_error_username) {
                        $array_error[] = $lang_module['error_username_exist'];
                    }
                }

                if ($field == 'email') {
                    // kiểm tra email hợp lệ
                    if (($error_xemail = nv_check_valid_email($value)) != '') {
                        $array_error[] = $error_xemail;
                    }

                    // kiểm tra email tồn tại chưa
                    $stmt = $db->prepare('SELECT userid FROM ' . NV_MOD_TABLE . ' WHERE email= :email');
                    $stmt->bindParam(':email', $value, PDO::PARAM_STR);
                    $stmt->execute();
                    $query_error_email = $stmt->fetchColumn();
                    if ($query_error_email) {
                        $array_error[] = $lang_module['error_email_exist'];
                    }

                    // kiểm tra email đã tồn tại trong nv4_users_reg chưa
                    $stmt = $db->prepare('SELECT userid FROM ' . NV_MOD_TABLE . '_reg WHERE email= :email');
                    $stmt->bindParam(':email', $value, PDO::PARAM_STR);
                    $stmt->execute();
                    $query_error_email_reg = $stmt->fetchColumn();
                    if ($query_error_email_reg) {
                        $array_error[] = $lang_module['error_email_exist'];
                    }

                    // kiểm tra email đã tồn tại trong nv4_users_openid chưa
                    $stmt = $db->prepare('SELECT userid FROM ' . NV_MOD_TABLE . '_openid WHERE email= :email');
                    $stmt->bindParam(':email', $value, PDO::PARAM_STR);
                    $stmt->execute();
                    $query_error_email_openid = $stmt->fetchColumn();
                    if ($query_error_email_openid) {
                        $array_error[] = $lang_module['error_email_exist'];
                    }
                }

                if ($field == 'password') {
                    if (($check_pass = nv_check_valid_pass($value, $global_config['nv_upassmax'], $global_config['nv_upassmin'])) != '') {
                        $array_error[] = $check_pass;
                    }
                }
            } else {
                // chế độ import dữ liệu
                $groups_list = nv_groups_list($module_data);

                $_user = array();
                $_user['view_mail'] = $nv_Request->get_int('view_mail', 'post', 0);
                $_user['in_groups'] = $nv_Request->get_typed_array('group', 'post', 'int');
                $_user['in_groups_default'] = $nv_Request->get_int('group_default', 'post', 0);
                $_user['is_official'] = $nv_Request->get_int('is_official', 'post', 0);
                $_user['adduser_email'] = $nv_Request->get_int('adduser_email', 'post', 0);

                // xác định nhóm thành viên
                $in_groups = array();
                foreach ($_user['in_groups'] as $_group_id) {
                    if ($_group_id > 9) {
                        $in_groups[] = $_group_id;
                    }
                }
                $_user['in_groups'] = array_intersect($in_groups, array_keys($groups_list));

                if (empty($_user['is_official'])) {
                    $_user['in_groups'][] = 7;
                    $_user['in_groups_default'] = 7;
                } elseif (empty($_user['in_groups_default']) or !in_array($_user['in_groups_default'], $_user['in_groups'])) {
                    $_user['in_groups_default'] = 4;
                }

                if (empty($_user['in_groups_default']) and sizeof($_user['in_groups'])) {
                    nv_jsonOutput(array(
                        'error' => 1,
                        'msg' => $lang_module['edit_error_group_default']
                    ));
                }

                $sql = "INSERT INTO " . NV_MOD_TABLE . " (
                    group_id, username, md5username, password, email, first_name, last_name, gender, birthday, sig, regdate,
                    question, answer, passlostkey, view_mail,
                    remember, in_groups, active, checknum, last_login, last_ip, last_agent, last_openid, idsite)
                VALUES (
                    " . $_user['in_groups_default'] . ",
                    :username,
                    :md5_username,
                    :password,
                    :email,
                    :first_name,
                    :last_name,
                    :gender,
                    " . intval($array_data['birthday']) . ",
                    :sig,
                    " . NV_CURRENTTIME . ",
                    :question,
                    :answer,
                    '',
                     " . $_user['view_mail'] . ",
                     1,
                     '" . implode(',', $_user['in_groups']) . "', 1, '', 0, '', '', '', " . $global_config['idsite'] . "
                )";

                $data_insert = array();
                $data_insert['username'] = $array_data['username'];
                $data_insert['md5_username'] = nv_md5safe($array_data['username']);
                $data_insert['password'] = $crypt->hash_password($array_data['password'], $global_config['hashprefix']);
                $data_insert['email'] = $array_data['email'];
                $data_insert['first_name'] = $array_data['first_name'];
                $data_insert['last_name'] = $array_data['last_name'];
                $data_insert['gender'] = $array_data['gender'];
                $data_insert['sig'] = $array_data['sig'];
                $data_insert['question'] = $array_data['question'];
                $data_insert['answer'] = $array_data['answer'];
                $userid = $db->insert_id($sql, 'userid', $data_insert);

                if (!$userid) {
                    nv_jsonOutput(array(
                        'error' => 1,
                        'msg' => $lang_module['import_error'],
                        'exit' => $exit
                    ));
                }

                $query_field = nv_users_field_check($custom_fields, false);
                $query_field['userid'] = $userid;
                $db->query('INSERT INTO ' . NV_MOD_TABLE . '_info (' . implode(', ', array_keys($query_field)) . ') VALUES (' . implode(', ', array_values($query_field)) . ')');

                nv_insert_logs(NV_LANG_DATA, $module_name, 'log_add_user', 'userid ' . $userid, $admin_info['userid']);

                if (!empty($_user['in_groups'])) {
                    foreach ($_user['in_groups'] as $group_id) {
                        if ($group_id != 7) {
                            nv_groups_add_user($group_id, $userid, 1, $module_data);
                        }
                    }
                }

                $db->query('UPDATE ' . NV_MOD_TABLE . '_groups SET numbers = numbers+1 WHERE group_id=' . ($_user['is_official'] ? 4 : 7));
                $nv_Cache->delMod($module_name);

                // Gửi mail thông báo
                if (!empty($_user['adduser_email'])) {
                    $full_name = nv_show_name_user($array_data['first_name'], $array_data['last_name'], $array_data['username']);
                    $subject = $lang_module['adduser_register'];
                    $_url = NV_MY_DOMAIN . nv_url_rewrite(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name, true);
                    $message = sprintf($lang_module['adduser_register_info1'], $full_name, $global_config['site_name'], $_url, $_user['username'], $_user['password1']);
                    @nv_sendmail($global_config['site_email'], $array_data['email'], $subject, $message);
                }

                nv_jsonOutput(array(
                    'error' => 0,
                    'msg' => $lang_module['import_success'],
                    'exit' => $exit
                ));
            }
        }

        // Kiểm tra các trường dữ liệu tùy biến + Hệ thống
        if ($check) {
            $array_error = $array_error + nv_users_field_check($custom_fields);
        } else {}

        $notify = '';
        if ($exit) {
            $notify = sprintf($lang_module['checking'], $array_data['username']);
        }

        if (!empty($array_error)) {
            nv_jsonOutput(array(
                'error' => 1,
                'username' => $array_data['username'],
                'email' => $array_data['email'],
                'msg' => implode(', ', $array_error),
                'current' => $current,
                'notify' => $notify,
                'exit' => $exit
            ));
        }

        nv_jsonOutput(array(
            'error' => 0,
            'current' => $current,
            'notify' => $notify,
            'filename' => $filename,
            'exit' => $exit
        ));
    }
    nv_jsonOutput(array(
        'error' => 0,
        'current' => $current,
        'exit' => 1
    ));
}

if ($nv_Request->isset_request('step3', 'post')) {
    if (isset($_FILES['file']) and is_uploaded_file($_FILES['file']['tmp_name'])) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], NV_ROOTDIR . '/' . NV_TEMP_DIR . '/' . basename($_FILES['file']['tmp_name']))) {
            nv_jsonOutput(array(
                'error' => 0
            ));
        }
    }
    nv_jsonOutput(array(
        'error' => 1,
        'msg' => $lang_module['error_required_file']
    ));
}

$page_title = $lang_module['import'];
$groups_list = nv_groups_list($module_data);

$groups = array();
if (!empty($groups_list)) {
    foreach ($groups_list as $group_id => $grtl) {
        $groups[] = array(
            'id' => $group_id,
            'title' => $grtl,
            'checked' => ''
        );
    }
}

$xtpl = new XTemplate('import.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('STARTROW', $startRow);
$xtpl->assign('URL_DOWNLOAD', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=import&download=1');

$a = 0;
foreach ($groups as $group) {
    if ($group['id'] > 9) {
        $xtpl->assign('GROUP', $group);
        $xtpl->parse('main.group.list');
        ++$a;
    }
}

if ($a > 0) {
    $xtpl->parse('main.group');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
