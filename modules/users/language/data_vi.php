<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2022 VINADES.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Sun, 25 Sep 2022 20:47:04 GMT
 */

if (!defined('NV_ADMIN'))
    die('Stop!!!');

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('1', '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '{SSHA512}7GepaOrd8ovAWVis5H4su00TFTJTOwJjrMU3QP4NgtxzPXTNiPD8xBpcdcUVVqdnc6PQUQPtg1Wy1tyUOHSzd2U5OTY=', 'tuanpb1988@gmail.com', 'admin', '', 'M', '', '583347600', '', '1662650715', 'abc', '123', '', '0', '1', '1', '1', '0', 'JOSECFK7ZY3MXFJN', 'f39fcf1864e9e6b15853ac9a7cb1ca60', '1664029806', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '', '1663861143', '0', '0', '', '-3', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('2', '3', 'tran.lien.1', '680d4f27e299399228379d0bc877d5ee', '{SSHA512}IMSEX1vugeNf7lFQnV+e/PpYCL4n18hAeEx4wm7SNRBEIcg8WwpZ0E1FJutbkROSxYmPTmigrMEPyxMLODEoSDYyOWE=', 'tranlien@gmail.com', 'Liên', 'Trần Thị', 'F', '', '583347600', '', '1662651190', 'abc', '123', '', '0', '1', '3,13,4', '1', '0', '', 'd5829c3b26ab85f5f5d1e043579526d4', '1664137723', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '1664134914', '0', '0', '', '0', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('80', '14', 'phamthilinh4', '1f739c233a70b5e1f4a20c0f4a2b15a7', '{SSHA512}gyzIooOAjhEh7W/1jRbhvp59d+VLQs68RV1wovEfHKuE0sNNFBcFWGrO7RfdoGlB01b+4g+JPwQBZQDpGkvjJmY2Njk=', 'phamthilinh4@fecredit.com.vn', 'Linh', 'Phạm Thị', 'F', '', '2', '', '1664132772', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('81', '14', 'nguyenthihang37', 'fcfc583761bdca3606f9de2ac58aba2d', '{SSHA512}xrPf7mfoksGZcwGLMfTVh1EBa7BpQnkuoqqSfjviIe/bJVOxsSYUfxf6ubW/jCAcbNEQ3Ld4m/6c4vRrbhp+RTU0MmM=', 'nguyenthihang37@fecredit.com.vn', 'Hằng', 'Nguyễn Thị', 'F', '', '4', '', '1664132773', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('67', '14', 'nguyenthihoanganh2', 'ebcd644729b9560822a42eaca6912013', '{SSHA512}E3/O7zhUClc/1T3tAREll6SUM4mv1/0M6JP4xTZdF2DA/fLCLHQU5SueNrXwE/4Av9jr9b4G8Za2Z1b+r+mOITg0NWY=', 'nguyenthihoanganh2@fecredit.com.vn', 'Anh', 'Nguyễn Thị Hoàng', 'F', '', '1', '', '1664132754', 'abc', '123', '', '1', '1', '14', '1', '0', '', 'e2fbc981262673f20ea1c18ff64ef31e', '1664134808', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('68', '14', 'nguyenvanthuan11', 'f8764f05c0dc4c7019ff40806a7afe60', '{SSHA512}wdnPr/wEhInSc2UTDutnMC5Ch6m8oVz9JGuNEVxxfeLKGWvxubz7lC9Swq70h24KqC3Kf3gQ00aX9iz2npNwZDIwNTY=', 'nguyenvanthuan11@fecredit.com.vn', 'Thuận', 'Nguyễn Văn', 'M', '', '7', '', '1664132756', 'abc', '123', '', '1', '1', '14', '1', '0', '', '2a76458f0df4a86907b3c8b972b8efa9', '1664133792', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('5', '3', 'dieuhanhchung', '97b197a3ffaed245dcbe9dce85bdfc4c', '{SSHA512}2ETiLQN5N6eX+uzRVoczBDky3LuSnc3cNfaKf+Zf+EFXdh83C5kcVlQQR+xLux/g3XI3pyN/GKsFXnn/qEg8XWIyNzU=', 't@gmail.com', 'Quản lý chung', '', 'M', '', '650912400', '', '1663731144', 'abc', '123', '', '1', '1', '3,13,4', '1', '0', '', '', '0', '', '', '', '1663731231', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('69', '14', 'phanthilan2', 'f057506010941805630decbbf3ddf9e6', '{SSHA512}Xd7/NIdN7cZgM7d81mQxKPGN6VW+SGFOR/Dfinxr9ywNA0zzA5MJcXdnMlYYh9q33SY+ivRyq5zLrZ7c/vsGiWFjYzM=', 'phanthilan2@fecredit.com.vn', 'Lân', 'Phan Thị', 'F', '', '3', '', '1664132757', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('70', '14', 'tranthikhanhlinh5', '9790f81d87c3308cd79a5fb034fe2d0e', '{SSHA512}V3FOeIAIFqA+qgDs6cCpF1mU5UqqMByV/n+IT4TkJE5YrchxoTh7rjoRb91rGFtB+8akOrvrWmi7KPDRcO0JRjI3NmQ=', 'tranthikhanhlinh5@fecredit.com.vn', 'Linh', 'Trần Thị Khánh', 'F', '', '11', '', '1664132758', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('71', '14', 'nguyenthithuha47', '85d2de9a61689578f819c1bd1252d849', '{SSHA512}cXyg9AVOIbk5ikF/AlX0VL2WCVX5U9YucPukadPm5zsDOWEj/dZPX3H86GAoUVQMn3h//cDn9HVaAs2G3NZifWMxODA=', 'nguyenthithuha47@fecredit.com.vn', 'Hà', 'Nguyễn Thị Thu', 'F', '', '4', '', '1664132759', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('72', '14', 'nguyenthihatrang3', '099d6a26dbe32650a7a6ea4635b95fd2', '{SSHA512}nZKmHLMHcXlumRrvki7kD6m2u/jOkanboxC+nkx6aIMoqbr0SwLfl5EnftIwYWn0W0mHH/ICI4MtfdbzzYZ2LmQ3MTc=', 'nguyenthihatrang3@fecredit.com.vn', 'Trang', 'Nguyễn Thị Hà', 'F', '', '3', '', '1664132761', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('73', '14', 'lethithao14', '3b363e2103fbc2791c4e927c5dc5eb77', '{SSHA512}i2TK9hDTgRvLoXFbuqP/9lx/5B6n/w/so6uXgCO0RJ8AuwjYt9g+mtmet77Pk2ikn9URx3ZqLdbNIsQvSM1OEmE1MDQ=', 'lethithao14@fecredit.com.vn', 'Thảo', 'Lê Thị', 'F', '', '10', '', '1664132763', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('74', '14', 'tranhuydien', 'de3ab293284f5893f6ec4379d8e96a88', '{SSHA512}ZHLH6kGPqgbMGQn6iudaBjE2grloR2v/R/xN1Hl9RK+zuBMo/fawFS1waUcUa4/Y2gxAYGGy2gHaK2b0zAY0yjA4ODM=', 'tranhuydien@fecredit.com.vn', 'Diễn', 'Trần Huy', 'M', '', '2', '', '1664132765', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('75', '14', 'tranthinhung6', '4ceebe5453becbf3585d2659566b5be1', '{SSHA512}CkjsmPKABYJSk5K1alhNR6C54CFF+Q9lwzAf9Re4WgxwHCsFHw6PuYRj1uKA/t+MkJ8e5j9VdfGDXY5FYCeF+GI1ZTc=', 'tranthinhung6@fecredit.com.vn', 'Nhung', 'Trần Thị', 'F', '', '8', '', '1664132766', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('76', '14', 'dangthinhung4', '4989788143d55ebe8b3e17865d03a5ad', '{SSHA512}Z2x/szUuYYbDE99jfaWFlYsR4UeRL0W6pevZIVOZ8P/Yy70YLJaP5HNZAs4pU5RlE1hPcwQFB5+AOOSXFu8NXGUxMzU=', 'dangthinhung4@fecredit.com.vn', 'Nhung', 'Đặng Thị', 'F', '', '5', '', '1664132767', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('77', '14', 'votaduy', '10424e7511793d190d456730e54b4362', '{SSHA512}YlnYzzj1/sBYxXD/q1SfwsnGKT0t7Y4Ukz4w6yK1+Tl5s7rEgv+o3DtTlmttNeZsknqA38RNhRFhPoC84wGi72M3MWY=', 'votaduy@fecredit.com.vn', 'Duy', 'Võ Tá', 'M', '', '10', '', '1664132768', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('78', '14', 'tranthituyet3', '4f93c553237d01845fdb024b7e88ce08', '{SSHA512}jXV3WqUGe3KaW8w+CtcRq/9PZ1yVIMPr2C5C1YAU3TB8AaL4+OZWYD1XeafkNL002htVK+G9hVEfb1gPt0d+omI3OGM=', 'tranthituyet3@fecredit.com.vn', 'Tuyết', 'Trần Thị', 'F', '', '12', '', '1664132769', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('79', '14', 'tranthingan6', '382f41e4fc9119ee180077019b531681', '{SSHA512}klX1ZqwqnDxkBkV8ZZE+UMUHhhHBjef3uWjXwRzSnX1/NmXxsmB/md61yeQB3bJ+2Fuqwu6YAVeyyVnK56N2SzAwNDU=', 'tranthingan6@fecredit.com.vn', 'Ngân', 'Trần Thị', 'F', '', '3', '', '1664132771', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('59', '20', 'ngochoan', 'b5801052530e64367fc7914277577c59', '{SSHA512}P3/uY2Dc44MlZseJ/lJKaaL8SJSJ0ie/58qcLEkKqU5BiNG21QHoUi39fxyKPFMckgO7xMHbxcQyLKyDA9p4iDJhZTk=', 'ngochoan@gmail.com', 'Lê Ngọc Hoàn', '', 'M', '', '-25200', '', '1664132285', 'abc', '123', '', '1', '1', '22,20,4', '1', '0', '', '', '0', '', '', '', '1664132637', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('60', '19', 'quocbao', '7c90dee826557e9a536a59daf64bf87c', '{SSHA512}374VQW4jPLTrP403YfxSMxtvumeFRysOYduHvWRAq4Sl6O5OUDO8NBBvvBkRYBL+/CVrCRo+8B75vG5/6kecwDljZTg=', 'quocbao@gmail.com', 'Nguyễn Quốc Bảo', '', 'M', '', '-25200', '', '1664132286', 'abc', '123', '', '1', '1', '22,19,4', '1', '0', '', '', '0', '', '', '', '1664132630', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('61', '21', 'caothanh', '2c7bd77782f90523e0440077e8654d7e', '{SSHA512}ALVgXfrfvqH0vNbghMgBatvw/XAPGMY2Y4NHDVMqtoCakDFnqOjCmAACojyO4GD46DxdhicsD/n+LA6B8tkeUDJlZWQ=', 'caothanh@gmail.com', 'Cao Trần Thanh', '', 'M', '', '-25200', '', '1664132287', 'abc', '123', '', '1', '1', '22,21,4', '1', '0', '', '', '0', '', '', '', '1664132643', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('62', '15', 'nguyenduc', '69f878be107822a7ee0d76a348718283', '{SSHA512}bS/hnSC73FKtj4DxsmkZmjXgSJN/fc0jlmo+tMZ0IZ4USSMZwIsgcUP23Yd8Og8ie+Jf6qtceEJr5x64+jqycjc1NTM=', 'nguyenduc@gmail.com', 'Nguyễn Minh Đức', '', 'M', '', '-25200', '', '1664132288', 'abc', '123', '', '1', '1', '22,15,4', '1', '0', '', '', '0', '', '', '', '1664132648', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('63', '18', 'nguyencam', '617e35ce69d6dfca62cfdb5bdea1e39e', '{SSHA512}+lB3I3jhbPblvUd3yksa3DweW5yZQgIoNOtlc7BmgPMbokTZaXuU81xPMGqqlS7cUJhfBTquhYwGW/dXi3/ypDhjM2U=', 'nguyencam@gmail.com', 'Nguyễn Thị Cẩm', '', 'F', '', '-25200', '', '1664132290', 'abc', '123', '', '1', '1', '22,18,4', '1', '0', '', '', '0', '', '', '', '1664132656', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('64', '17', 'phanhai', '0fcf1d49eda94b166f4e761aa55483f6', '{SSHA512}hZJYCVUUo419qElsOqQr7r7XNtDBpujytCpkVbfbNuCPnd9w9ns2KUHWUswvpfp8G08K2pd0oeDwLSEb6r4ZejEzYjg=', 'phanhai@gmail.com', 'Phan Ngọc Hải', '', 'M', '', '-25200', '', '1664132291', 'abc', '123', '', '1', '1', '22,17,4', '1', '0', '', '', '0', '', '', '', '1664132661', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('65', '14', 'tienduong', '89611c968b05a2ad93a5518858c03d78', '{SSHA512}8/BKyklKgTlK57l67EG6YrIget5gCF9OikUj5/t/EsF8AxWdQ0/Qqn7ofiYHCvxdRSqXjmvbKo1Qv+bl8tTvVTQ1NWY=', 'tienduong@gmail.com', 'Đặng Tiến Dương', '', 'M', '', '-25200', '', '1664132292', 'abc', '123', '', '1', '1', '22,14,4', '1', '0', '', 'c39c917ff68ba5a834bfd91a00176ef3', '1664134129', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '1664132666', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('66', '16', 'tridat', '388eb4c0a313d874938fb2d6e3de12ee', '{SSHA512}PVKekh3pRRNiSi3t1vMr6hAL8iEAjNXt0uKq+reM55AvizkLWiphlvNMZyCD7ItzxVOiAzk1/0D5NJ+qUM9USjNkZGI=', 'tridat@gmail.com', 'Nguyễn Trí Đạt', '', 'M', '', '-25200', '', '1664132293', 'abc', '123', '', '1', '1', '22,16,4', '1', '0', '', '', '0', '', '', '', '1664132672', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('82', '14', 'nguyenthidieuai', 'b2c0f80a978615ad92789091f71e0cc9', '{SSHA512}GpnrGZvyIdKUeTYEcxdh5m9WJlGmYgFJXrfq3iAbs9y/hCDmI8sMglXVd0ykiXa5//doo38kxnA0uH5SXWwA3jM5Mjk=', 'nguyenthidieuai@fecredit.com.vn', 'Ái', 'Nguyễn Thị Diệu', 'F', '', '8', '', '1664132774', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('83', '14', 'nguyenthiminhsao', '75dfce4f9e15aa46847a15451cd2d85d', '{SSHA512}RKaY16ifen2H021/Mh5JdfBXVvz+m6CXrfI8fYRyx4qo0yy0hqyZcxkI22gbCjq7aPat4iqJeIn47hueFmzzwmM5NjI=', 'nguyenthiminhsao@fecredit.com.vn', 'Sao', 'Nguyễn Thị Minh', 'F', '', '7', '', '1664132775', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('84', '14', 'tranthihongthiep', '98d2a8496b020c8df58d5482d765b44c', '{SSHA512}goHTzmLsGNOFRcT0EPQwsMzOjT6gbhQtrtKJhWX6ek0lkA8fKzNmXic4xEbcRltTRZ5fU2QmRtomwwkP/FjsNmMyNjM=', 'tranthihongthiep@fecredit.com.vn', 'Thiếp', 'Trần Thị Hồng', 'F', '', '12', '', '1664132776', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('85', '14', 'nguyenchinhtruong', '2fb092c0cab7c5e0896458da779e43c7', '{SSHA512}iuPUxRcwyyibnKcMfCM6skt+q3OV4CGYvdIZTfzv14bS1g7/arYhBVdHVP4s/Ip0vJzOQSh0HGs5pdt38asHADAxYjA=', 'nguyenchinhtruong@fecredit.com.vn', 'Trường', 'Nguyễn Chính', 'M', '', '4', '', '1664132778', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('86', '14', 'tranthitonga', '63b0323efcd5d5c571ed70a2c29ff3d5', '{SSHA512}+Fru4S3f5GSLmTeLvNKEtwF5foSXUSyZqKutR88vHvyP/XXugb74Kzq8avzer0cfCf9uFkIVWT1c2bKrPNFPJDE5ODI=', 'tranthitonga@fecredit.com.vn', 'Nga', 'Trần Thị Tố', 'F', '', '9', '', '1664132779', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('87', '14', 'nguyenhuuho1', '19d09ce0674d5ed53e6908c6d2a4bea2', '{SSHA512}5LE1kjFrcScJjrcLUeGk1n/4u+tyncen7+aLfXJ3nIuWdcc2yUk8Crzi3uj817qEWj6YAaP699O8qljKn00mGTg1MTE=', 'nguyenhuuho1@fecredit.com.vn', 'Hổ', 'Nguyễn Hữu', 'M', '', '9', '', '1664132780', 'abc', '123', '', '1', '1', '14', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('88', '15', 'dinhtrunghieu5', '7f4eb47602d56ee6a3f7d42c964b4a00', '{SSHA512}wDRkEl/Ik6bZ/XI6+zumDL/Dw/rs1SaJ10mHtR+we0nAIXHZesZYqmszh+OqvkkdEo+TnPgsmQnGrkvfyp7z5GZhMjI=', 'dinhtrunghieu5@fecredit.com.vn', 'Hiếu', 'Đinh Trung', 'M', '', '3', '', '1664132853', 'abc', '123', '', '1', '1', '15', '1', '0', '', '6eecdd87d0eea868f5bb5c26607bd5f4', '1664133830', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('89', '15', 'nguyenngocchat', '0b801eba06fdc17a3806f924ef07d6e4', '{SSHA512}DKRzgN0eYSMQ/VaNdxzpX4nfBajE0XfdOmqcGDbm1i5oSlHJgGVgWi5VzepD1/puMV0TiNu3trdPKc0wX4+3CzAxYjQ=', 'nguyenngocchat@fecredit.com.vn', 'Chất', 'Nguyễn Ngọc', 'M', '', '9', '', '1664132854', 'abc', '123', '', '1', '1', '15', '1', '0', '', 'cb08d280e4dc2964a3bb77b18e9350b1', '1664133912', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.84 Safari/537.36', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('90', '15', 'tranthihoaithuong3', 'fe8155daa4e9eef9575b5e3a70c79562', '{SSHA512}BtxnlNkk8KjU9l3ZIyCkyrJUs5uFq8J1b7ZJXZugPpBtS5sLukd0z6RCugpgA/bxfCBBQ8Ir9hxcm8yItd7uTmRiNjE=', 'tranthihoaithuong3@fecredit.com.vn', 'Thương', 'Trần Thị Hoài', 'F', '', '12', '', '1664132855', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('91', '15', 'lethihuyentrang1', '25952c68b6c5db934a6453e4bf98cf0c', '{SSHA512}gSJy2ylMBRYFzzMzFADS9+q5jT4P6zPYEwCAZWhkBgmjzszpPQDgswnCyy/NF1c9KWsq+ZxIB7+mK8h3nSD2QDNjOGE=', 'lethihuyentrang1@fecredit.com.vn', 'Trang', 'Lê Thị Huyền', 'F', '', '4', '', '1664132856', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('92', '15', 'tranthingoctrinh1', '955358329b9934440f5a30961c40a44d', '{SSHA512}OD5A3Qsjk9dkBRRbmfgKfNn+CLrqvJ+rKv9KRyr4g0E3S+F4GUfBmQH36LubbrMlD9CizIa1/OCFT9OhNd92LDhlNTI=', 'tranthingoctrinh1@fecredit.com.vn', 'Trinh', 'Trần Thị Ngọc', 'F', '', '5', '', '1664132857', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('93', '15', 'dangtuanh1', 'f8bf3b911705986c5294131f6646e0d5', '{SSHA512}nuSOGw2Flhi0vLna46rbPXLN441cORFzikfhVORaRai+Zbe96+JxQE0GHSfHnCQRTEzvURZAVPc/jVYbrEWm4GZiYWU=', 'dangtuanh1@fecredit.com.vn', 'Anh', 'Đặng Tú', 'F', '', '8', '', '1664132859', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('94', '15', 'nguyenbaongoc2', 'f24b6455ca5d7f49728a0c1be3071662', '{SSHA512}sSAU+Vnc4fGrj4Wg4f9oWUvcBKUSsSJI1GPug/WhsUor81bS0EC86kGOkslhOGA7w0TfYgxLc5NaDZo1f+BNZDBiODA=', 'nguyenbaongoc2@fecredit.com.vn', 'Ngọc', 'Nguyễn Bảo', 'M', '', '6', '', '1664132860', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('95', '15', 'hothithu3', 'b6faa278f3972b23d98c1fa578a0f912', '{SSHA512}9dJwk1Vrtaoupmd4/D6mogPZPWOP7OufKlybCLW+FKkWcMI0DerfTXbd95nKiXFbVtjFelwgYjI2NX6+OpLUcWE3ZWI=', 'hothithu3@fecredit.com.vn', 'Thư', 'Hồ Thị', 'F', '', '6', '', '1664132861', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('96', '15', 'thaonguyen1', '8196060918148c59fb9b264bcdbe7d6a', '{SSHA512}7m5mReKDd1dMWB4AUOMkENOLr/ZFwaFyb3b37vnzc61xU7CLcEqFHzHHuxgiC7XNTRxGiCsI3TixsxlYymctw2M5NmE=', 'nguyendoanthaonguyen1@fecredit.com.vn', 'Nguyên', 'Nguyễn Đoàn Thảo', 'F', '', '2', '', '1664132862', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('97', '15', 'nguyenkhachung1', 'cb2fa371f706aeb292b2bd4209edf7a0', '{SSHA512}Rm7sDVkq6CHBf7k6k1+K1FOzP8G+1MhXZr6DpCs85QRR4E2ajK76XGzWQffE5MjFOEBzVwmMbtxSE/kcYIDMDjRlZDI=', 'nguyenkhachung1@fecredit.com.vn', 'Hùng', 'Nguyễn Khắc', 'M', '', '11', '', '1664132863', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('98', '15', 'nguyenthilananh17', '7b2fb020efe0ae7ca887593fb3946824', '{SSHA512}8v+uXoH1cqW6pzI59bdkqp/ExAA714VALm1BykkauPPeAgr6tMNBm6NBCSAOrov/r/FT1w6Ft/1vMdzAPM+wxGQ5Nzk=', 'nguyenthilananh17@fecredit.com.vn', 'Anh', 'Nguyễn Thị Lan', 'F', '', '4', '', '1664132865', 'abc', '123', '', '1', '1', '15', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('99', '16', 'letuananh26', '2e7fec78e65bfd1c96aebebb2fe58e5a', '{SSHA512}jgkKWl5SVT7J1cCZNMEw8PJUCCx/gZY/Nxx6lbgCDIDSeSpBj7hCJi2knuZYSUAQKAnsnwW/a0YTCdDOFlwmhzYxN2E=', 'letuananh26@fecredit.com.vn', 'Anh', 'Lê Tuấn', 'M', '', '4', '', '1664132951', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('100', '16', 'tranhuutrung', '8bc5ab32ae466d5d8f665ad47610d5bf', '{SSHA512}mL7ByKM2jo+tpmcotmFPFl9QDPrLlGNFs8IUSKEIBJj7WtVe05QSyoXhcRRYYUz2shDMYA60PrtLkRyH64pBoWNkZjY=', 'tranhuutrung@fecredit.com.vn', 'Trung', 'Trần Hữu', 'M', '', '8', '', '1664132953', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('101', '16', 'hohoangtuan', '1d084f7cf5fe1ac150bf4937daee3a5c', '{SSHA512}7hkrcBz3HxibewlEUaqtAqr3XDMp7uQeCrjG33j2Z+jsrje7bw0EgUXm+iZn9Pkdao5oK1xYQytPym8CmedabDdlMzc=', 'hohoangtuan@fecredit.com.vn', 'Tuấn', 'Hồ Hoàng', 'M', '', '10', '', '1664132954', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('102', '16', 'buiquangphi', '16ad70bfcc3e86f665f8d71b79048676', '{SSHA512}3GsnnsULAeJOzJPtNWqJGzWamGc+DDD/ucPAuBaGnabknZ7BvAkgi6ZZB2Xe9TfFYMd58uHlPDBH7xW5GUCEeTEwZDE=', 'buiquangphi@fecredit.com.vn', 'Phi', 'Bùi Quang', 'M', '', '8', '', '1664132955', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('103', '16', 'tranthikieutrang2', '1205b9e44faf168e9be0e40f3c2bb878', '{SSHA512}dPPPDOwTVob0oo4nOSBgdEIT5jxE/j2USPcjClaDXFNfNwf7Tlj7aO2hFzNKDmxIPAwSE/NZDaUBrxAGds0KdTY1OWU=', 'tranthikieutrang2@fecredit.com.vn', 'Trang', 'Trần Thị Kiều', 'F', '', '9', '', '1664132956', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('104', '16', 'buithiminh1', '3b636aca753849648a731dbeebc1061f', '{SSHA512}vYU/tx46AvqhcDP54i9cq5IyWiPIGPs76e5Ejgw1uzoFh2saC7noP+YuS0J88cixxzSt2+fKLC/1ba4lVussKTMzNjQ=', 'buithiminh1@fecredit.com.vn', 'Minh', 'Bùi Thị', 'F', '', '4', '', '1664132957', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('105', '16', 'nguyenthithao54', '810e5814b4d91332f00ba4c29c206612', '{SSHA512}52eE05DzbDy3ZPCbOQnrM9uR7nDp4WS2Iy1JrAFiqwVoqkoZQLfqFzzmqDCXxHQOzwUwcyTxCkme274nK1EJYWViOTQ=', 'nguyenthithao54@fecredit.com.vn', 'Thảo', 'Nguyễn Thị', 'F', '', '7', '', '1664132958', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('106', '16', 'nguyenthitra3', '31e9732efb4ee7187b6c80a3ba352d32', '{SSHA512}7XAG6XSaAwk12DeLjC1OY5/5iNVwY9/Se432HZEA34i9a4BUGpPGlkWjULb8ZFBDK0rl79e13gbLMUDyrGTxcjU3YTE=', 'nguyenthitra3@fecredit.com.vn', 'Trà', 'Nguyễn Thị', 'F', '', '10', '', '1664132960', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('107', '16', 'nguyenthimai25', '19055db210447b9fc5e66d6f3ffe122c', '{SSHA512}ITJuNAuuHXdbImcWV/u19QKNzNzIzCBbJIRtOioMJDgRZZu7IkPIZmaCieHAP07R9xslUvYu9/mza5QBUCCK1mJkMjc=', 'nguyenthimai25@fecredit.com.vn', 'Mai', 'Nguyễn Thị', 'F', '', '10', '', '1664132961', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('108', '16', 'huynhthinga1', 'c20f028e0f54c4f48150684d9c02c9d5', '{SSHA512}9GtD4L+TZCg4XPs+9Dxi3KFU1BO6Cp65b0zNQUg+kwM38+ixkZ/oGnqhl2uvQGzCkxf8eLcxNysQ1VEuen4sbzk5ODE=', 'huynhthinga1@fecredit.com.vn', 'Nga', 'Huỳnh Thị', 'F', '', '3', '', '1664132962', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('109', '16', 'nguyenhuuthai1', '992dbe5e2bd5a6b0d5549747959294bb', '{SSHA512}FgwJjw6F50ZK9Ve60Pj8pRH+TPbdCuOwk7kZIjMclgZFFrsc6wp4oHKWqENFHdq9F05SQPs/T0Sk6WlY4zlQVzgwYzc=', 'nguyenhuuthai1@fecredit.com.vn', 'Thái', 'Nguyễn Hữu', 'M', '', '7', '', '1664132963', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('110', '16', 'phanthihang2', 'bd814b5bacb32c690a2b479760b48c6f', '{SSHA512}50QiLz0AFpfXreG5rNqTN5KR3GV3/5O0XvQPE/xsH6aVG5AYsQ4AjhzkqFW62s4w5HTy6q1sXXEjKUQjG7eKSWVhODY=', 'phanthihang2@fecredit.com.vn', 'Hằng', 'Phan Thị', 'F', '', '3', '', '1664132964', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('111', '16', 'dangvananh', '8ee4e7a90c72bce66489aa5e8980c063', '{SSHA512}PfKL9BXvVEAULdKbLIsTiuGaGnoAMDJgfvPD6fxy8za4Qq6FDljSMyVWGzfKVKW2ZSc8+37aVIs4FsbjDpeJxDNjOWY=', 'dangvananh@fecredit.com.vn', 'Anh', 'Đặng Văn', 'M', '', '12', '', '1664132965', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('112', '16', 'nguyenthimyngoc6', '34e9e68aaeed970897e2bbc05df5e3be', '{SSHA512}S3ZrAcfvMKZeppm82A/7Li4G1eZeHYe1y053U7cYKTUTbZ0T27VrqZ8+O4ZOYSGMzRxSC0dqqhrbgtPwQdRSXDdiMzU=', 'nguyenthimyngoc6@fecredit.com.vn', 'Ngọc', 'Nguyễn Thị Mỹ', 'F', '', '10', '', '1664132967', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('113', '16', 'nguyenthianhquynh1', '3b25848092648f00684e79b95b2cae1e', '{SSHA512}w4+2rXcKCluPuXn1ctUOBxEmB9h8wXyXxcnf40x2kOTIPdTe5wXt/1cXu2h9DzhVrS5CwHGqbNeIS1vcJVuSB2Q1YzY=', 'nguyenthianhquynh1@fecredit.com.vn', 'Quỳnh', 'Nguyễn Thị Anh', 'F', '', '2', '', '1664132968', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('114', '16', 'phanthimylinh1', 'a386478c69b9e80aff9850fd894c9811', '{SSHA512}hutbci99kdfR4HBCfF3mudVTbDBjjGTJpETpOAc0UMe1zkFrikoYIVcm6742ABiBWa55GdLAZB7XwMnNubKZ1mQwYjk=', 'phanthimylinh1@fecredit.com.vn', 'Linh', 'Phan Thị Mỹ', 'F', '', '1', '', '1664132969', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('115', '16', 'nguyenthituyet18', 'bb84da097bbd9c33bb0ddc05c8fcf436', '{SSHA512}ex5Gjs6LscaSIYCoOamIuPIsr+ZoCdD4pMLumIZZbog8mQX4qe8yg+pkyYTippRfKWYsaT2BICvblnMrig9pjTBjZWI=', 'nguyenthituyet18@fecredit.com.vn', 'Tuyết', 'Nguyễn Thị', 'F', '', '10', '', '1664132970', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('116', '16', 'nguyentrihiep', '5bfe22332dd3d2cb248bdd8b7ccc92ae', '{SSHA512}gMMuKLMO2+BW4+M/Ic9AwslB38G+cDjoL+Vc7HJKtAJ8wB0Fp0W/q8L0rAia3cQTMfr45AmuzcU+OQIbj6QQ5TYzZjk=', 'nguyentrihiep@fecredit.com.vn', 'Hiệp', 'Nguyễn Trí', 'M', '', '8', '', '1664132971', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('117', '16', 'vongocmai', '17053885a14726a795f5cd3265929fef', '{SSHA512}0O8D7MVL3aHvwZfzLEkg61q904w1znvHtTBDs6XCGWMXezvo3rRzXuMxkEgLgUNnQXE5hFP/l5N47Y6T+987QWQ2Mzc=', 'vongocmai@fecredit.com.vn', 'Mai', 'Võ Ngọc', 'F', '', '11', '', '1664132972', 'abc', '123', '', '1', '1', '16', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('118', '17', 'hoangquochuy4', '71a13932a30f284125eba8c73e4dacbf', '{SSHA512}XxsYyuUgm4ll28UFlycffrrliHlsqKo7JFvHWA9D7c/uY6/ylRJjKcwV9S1WivKdWe3a6GBs3kMYZgjkHIFYxmVmMTQ=', 'hoangquochuy4@fecredit.com.vn', 'Huy', 'Hoàng Quốc', 'M', '', '3', '', '1664133070', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('119', '17', 'letridung1', 'a878bf8badfafc197a82b2001e2ce5c1', '{SSHA512}2i6tudXFrJWcWPHJXTDNM05j5z1UZoPvj2yxA8pGL2JeeeXf4qFRUKeKizfv5dVw/4sGSf1kZd+NJGSEtO0o52Y4YWQ=', 'letridung1@fecredit.com.vn', 'Dũng', 'Lê Trí', 'M', '', '6', '', '1664133071', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('120', '17', 'phanthituyet4', '57886c7376644370dce9db769cd76c7f', '{SSHA512}PU/aGyop86YDQYrtUl1wbTsJz3+JRxZ9JgTr4syCvIVSHYtwd+JphwkWhpkiJUI2+QKi0tSSvMiAni9fG3WDqzcyMWY=', 'phanthituyet4@fecredit.com.vn', 'Tuyết', 'Phan Thị', 'F', '', '1', '', '1664133072', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('121', '17', 'tranthithu9', '14db46b267c8785ab11c338426f8ced3', '{SSHA512}H0MTqFOS5O5Q2r+8/Srz/d+/DEXOebl1ysBvl7V/7nM1SzdamZ234LdDDFhiZ1Su0Xpe3y0rkDglfXmjGc0ynDQyNzQ=', 'tranthithu9@fecredit.com.vn', 'Thư', 'Trần Thị', 'F', '', '9', '', '1664133073', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('122', '17', 'chuthily', 'f2f58765cf975b98bc7cec5f8fa0e31c', '{SSHA512}J0SPXzuhuJqQUlNbinQseMmxyTiqA//fvMxn/LFFDGUBX8VM6tv6P62sHoTUOC6YLnfNWkzTTQZycShCV49x3mM5NzM=', 'chuthily@fecredit.com.vn', 'Lý', 'Chu Thị', 'F', '', '10', '', '1664133074', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('123', '17', 'nguyenthihuyen56', '1b7fa2236c7da6c7e6c96bb968fa37a3', '{SSHA512}EtyTIir+H4Dm8yFPrOoTjypnveCiVEPUJlkkKIDqp9nBiSpiiN5WiVD+RzZJFdKDWfBnypEbogyb0aSrapPgVjM1M2Q=', 'nguyenthihuyen56@fecredit.com.vn', 'Huyền', 'Nguyễn Thị', 'F', '', '10', '', '1664133075', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('124', '17', 'lethihaphuong1', '9cee954609cd4df1ab44ec0c6fd59dfd', '{SSHA512}9mb2Hsb7EFGNgFcYfAsJLcEYWCqGd3GkgH3IfugNpQr5TeGccXi08bTPdG9eSAgVAwD8fVo6i9UJfluUSXDYYzNhYjg=', 'lethihaphuong1@fecredit.com.vn', 'Phương', 'Lê Thị Hà', 'F', '', '3', '', '1664133077', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('125', '17', 'hothinhung1', 'c7e6b4260e9a5651170c5d76311e125d', '{SSHA512}7ZXICPIIYpgRhfjVxCXpu2t1oxzsYaLAK1dbPg8iiATSDsJNh8nczyFgKD6YtpOSEc8owHs8R1PIlT6pTLQvtzliMzc=', 'hothinhung1@fecredit.com.vn', 'Nhung', 'Hồ Thị', 'F', '', '11', '', '1664133078', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('126', '17', 'buithile4', 'c7cb78c279c5ffc42ba09c57f0e8bee3', '{SSHA512}kWtDe6w3qbJhIy3sO+4WNVqvEdUUF2bCbgxDbsUw0a+uu9kmzy+FdU8H0ZUH3pTuFloL7FYf5B3Lchp8WICLYDcwMWI=', 'buithile4@fecredit.com.vn', 'Lễ', 'Bùi Thị', 'F', '', '6', '', '1664133079', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('127', '17', 'lethiduchanh', '3983b111ddabc35907308191f85bec1d', '{SSHA512}dq7MTrJ/ugT+k6HEGixTiJvVlvItUfQs1gEx6/BEoiViBTAVuhW6lfJUhnY+4WWZp2f5316zd+8+Kmd8Q74z7jMyMmI=', 'lethiduchanh@fecredit.com.vn', 'Hạnh', 'Lê Thị Đức', 'F', '', '11', '', '1664133080', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('128', '17', 'phamthithuyhang6', 'e9dd08906b9ec409fd9b835fd63a254b', '{SSHA512}HTX6gvbw7tj1X8yPQrkD5UZV1/IVQknwKg3/uYEd463OJEUjd/PbW9Gv+Etjh6Q8Kut/lkUoNQiqLTwKSOLomjdjNmU=', 'phamthithuyhang6@fecredit.com.vn', 'Hằng', 'Phạm Thị Thúy', 'F', '', '5', '', '1664133081', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('129', '17', 'nguyenvanduong7', 'd1cfd871c49a3789daa9e11fc048f073', '{SSHA512}w0k/J5NM1ykQCQQs3amzwlkD/qZAwYCkI6/oWH4wC+iSHjj/oznbYFHsag6ogmKK9I9Yh2Evbza/Ui1SYa4JTDQzYzg=', 'nguyenvanduong7@fecredit.com.vn', 'Dương', 'Nguyễn Văn', 'M', '', '12', '', '1664133082', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('130', '17', 'trancongquang2', 'bf29dfd4ac524f0f6f73ce9d31eef45a', '{SSHA512}C2ij2WVXiGrjGQ/UqQlgTUggiKzenWohO5nzlL4dOl4soTXD6VlFjxsvGNsef+0mUZB3vStrUjorVdXRJ6Io5jFhMTI=', 'trancongquang2@fecredit.com.vn', 'Quang', 'Trần Công', 'M', '', '3', '', '1664133084', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('131', '17', 'hothithuong1', 'ffe393e21eb73a33685b7f3619122f14', '{SSHA512}TE1Fcb015OaA0i3oTLbwfBzGX5kXwsNt1P5NxKEcW8s+YZdS7VLQYyCVScmXPj5yoJCTSMd0VCLutXelIs0P02M5M2Y=', 'hothithuong1@fecredit.com.vn', 'Thương', 'Hồ Thị', 'F', '', '3', '', '1664133085', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('132', '17', 'hoduchung', 'cf085ed24bf989b4e469c72d16ac892f', '{SSHA512}7oxAhj1IMq1ihzJgZ12P4jDnWIFILe7Fr3WBb3phfCYesdzQopACj2cWNkJSdZZPcvS5PVsNN+Gf++UnJ2Cl7Tg1NTE=', 'hoduchung@fecredit.com.vn', 'Hùng', 'Hồ Đức', 'M', '', '8', '', '1664133086', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('133', '17', 'nguyenlequyen3', 'a013ad0f5990db78a3d95603b6539de1', '{SSHA512}oqJf98ZgH+lm6pJqt9J5EXkCmk0SAy4c68aDslkaRM6NggEQIZXB1fk19FCngrd6QEyzP7ZD94drTtvhxWs59DI4YWY=', 'nguyenlequyen3@fecredit.com.vn', 'Quyên', 'Nguyễn Lệ', 'F', '', '3', '', '1664133087', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('134', '17', 'nguyenthinam5', 'c2eb9dd8efebcfc7a32e9e164da82db5', '{SSHA512}cxm+KAX8xsst0FvbY3i7MTF3tSIR0EQEFGBFwkBQFB1pB1tVtnKYPO02CYwZwonnR1azMnQ8hpc8/zG9wgPBFjkyM2M=', 'nguyenthinam5@fecredit.com.vn', 'Nam', 'Nguyễn Thị', 'F', '', '5', '', '1664133088', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('135', '17', 'hoangthithao2', '2c3196d799385ae6791853dd8eb76d50', '{SSHA512}eo/dxZEF4Cex20/J6MbplF4ZZc/LIomC2JNEQzm4V06oxiZEfMBlbf9tNM0wdX8J2hWUTHD//5eNBDtH1CkrGmM0Y2Y=', 'hoangthithao2@fecredit.com.vn', 'Thảo', 'Hoàng Thị', 'F', '', '7', '', '1664133089', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('136', '17', 'hohaiquan', '4789f5cf51ba68ad72c1bd8ba546994e', '{SSHA512}yGJMzohsGH54bdH5m9omy9GulCgLyTvXcJU4Cn3k+f8tHbg+4bZ+6GXL9LnHMLRepicZIPLCnIJSaAp1v7+PE2Y3ZDc=', 'hohaiquan@fecredit.com.vn', 'Quân', 'Hồ Hải', 'M', '', '1', '', '1664133091', 'abc', '123', '', '1', '1', '17', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('137', '18', 'nguyenvanbay3', 'b1edf35d7fbe117198189b2777abc55c', '{SSHA512}PKW1Q8Sx+oqmIoIgqkRGfPjy8A0aIh3ZTPYesoFT9WbJ7OiG6WeefxTCFGmuBHUTSwUTesojhfcAl3FEK0cPuTAyZTA=', 'nguyenvanbay3@fecredit.com.vn', 'Bảy', 'Nguyễn Văn', 'M', '', '10', '', '1664133139', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('138', '18', 'phamnguyengiap', 'a9ee43ce6659eb392b1fa9b5d1c42af9', '{SSHA512}74LA73pZviTM/iR7+wVTq/PILdHOP7gBc17tpmPbAZokBT/4qnPdK06EZw5H7Yf6Fk4cD6epIczonKGCeex8ozgzMjA=', 'phamnguyengiap@fecredit.com.vn', 'Giáp', 'Phạm Nguyên', 'M', '', '10', '', '1664133141', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('139', '18', 'tranthinga15', '85bcfe275632d8d2e1575de6a594f987', '{SSHA512}ogklUXk4KfwYjqx/3dpKBA/gejIHw160xz4QdZcBA+3eXkVwkiI0w+KYAuSJiQZ0TuOOKATbOQ/lJ60erWfn5jkyMzU=', 'tranthinga15@fecredit.com.vn', 'Nga', 'Trần Thị', 'F', '', '11', '', '1664133142', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('140', '18', 'hothina', '7f26e9b778aa1fe43716ada59887008e', '{SSHA512}j7Kj3NWv/1WUyxboYbl0OMtpWNakYIZRr13AUrPhIwSki6ClQF3p8Xhk+lkPGll+oQ1QtW9QOJQbrJwU0w4ZF2NlYTM=', 'hothina@fecredit.com.vn', 'Na', 'Hồ Thị', 'F', '', '5', '', '1664133143', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('141', '18', 'nguyenthihien31', '898c280cddae6b4c175f6b4bf81c1dd9', '{SSHA512}T3o7k+UhWZ/Ew4ERCX8yqhNP7aq5inaEkCgln1FB7xQgphbcT2JnIoax/dAiTvNY6S/16mT8SOdk6ZGREAETM2I2ZmQ=', 'nguyenthihien31@fecredit.com.vn', 'Hiền', 'Nguyễn Thị', 'F', '', '8', '', '1664133144', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('142', '18', 'phanquocnam', '1a848db26b3b33eb53a1320f1b1e9490', '{SSHA512}S58iu2M/Rt/z8GKP6gF/pf6JX+16MeNoRMw+PXc4+HyUzuj9xU57pSKiX0BuLvPq56KB7troNZeeZEur3ITvVzJiNTc=', 'phanquocnam@fecredit.com.vn', 'Nam', 'Phan Quốc', 'M', '', '5', '', '1664133145', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('143', '18', 'trandinhsang', '3f32ef6838a569ddc2c8b840046ba08a', '{SSHA512}4nX1pGuniHePDFbx3iAD+CtWa+mO0BpGjSlnF4tOmeHGPx35Pa3mAFr9hrA34xjM9DsQlmEP/IuzVerQN5Q4nDMwMGY=', 'trandinhsang@fecredit.com.vn', 'Sang', 'Trần Đình', 'M', '', '6', '', '1664133146', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('144', '18', 'phanthilanh', 'b47ee9ec03eb4811036214fddf63912b', '{SSHA512}ajrULp/hQ71phRPh2BsyrCEBPJFQZ0CXEv1mWsJJI8oreu7No3hzTRHsh6f0D/rqnXTkXqpF+S5rCtQLmIqMIDRlNzc=', 'phanthilanh@fecredit.com.vn', 'Lành', 'Phan Thị', 'F', '', '10', '', '1664133148', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('145', '18', 'tokimhuong', 'f8d6e27570e362b00305f7a4e51c4914', '{SSHA512}5KM1TsuAAz0YMWNolMXBhcdutPUAvHvRL8w/E4Wrn+c9PFLWpue7ea/n3D0mTSuPIGNVbynY6b2MZ/KqI9PuuDhlMzk=', 'tokimhuong@fecredit.com.vn', 'Hương', 'Tô Kim', 'F', '', '10', '', '1664133149', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('146', '18', 'nguyenthithu31', '31a4c298133b2f5c4d73e43869a44852', '{SSHA512}wf0mMyBC42qrG+vRuw0su9XalDu4UEmJMQ2cc0xJ5cLuUl4hstBQSWcik7pAWDIiE5AmBg5SNGQ/vIUHcygScjE0YTM=', 'nguyenthithu31@fecredit.com.vn', 'Thu', 'Nguyễn Thị', 'F', '', '10', '', '1664133150', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('147', '18', 'nguyenthihuong53', '9a15173650f6eeb90806f74cd0da5909', '{SSHA512}Idh0wVYHS/P7pFKzuTdYiRAT3MZShe8ppRxqzMTHN5BCkUyGZhEj2wumR88hWeSM12fL3Is2rL5PUcwKwLWnoDczYWE=', 'nguyenthihuong53@fecredit.com.vn', 'Hương', 'Nguyễn Thị', 'F', '', '6', '', '1664133151', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('148', '18', 'tranthingocthuy2', '26a9913f6dcebee84cf7dfa441682193', '{SSHA512}NYJw3krFdFBJxZYGgzQpEBGY0TDI8EwYo7Pql07yxuSNnqZ2qw/IYHthtgwArW41P87Al4LvUJsu2q32Hoed9Tg4MzA=', 'tranthingocthuy2@fecredit.com.vn', 'Thuý', 'Trần Thị Ngọc', 'F', '', '6', '', '1664133152', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('149', '18', 'nguyenthiphuongchuc1', '96ad85b67a9fa9e92e957c12d048276a', '{SSHA512}izN8b8bMz9pjc7bfp450SFvbgzeXDWJiOwUP6LAA9CyCPtoRwbdumjlOrNOZLiB7a0ccJff9Cik+g1QGD4f7pWE2ODU=', 'nguyenthiphuongchuc1@fecredit.com.vn', 'Chúc', 'Nguyễn Thị Phương', 'F', '', '12', '', '1664133153', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('150', '18', 'duongthitam1', 'd5891c9dc9ebd4cae6a361628dda3289', '{SSHA512}yf7R7MuXwcbt3JQ735OyX1TbTZApXEsITO16s8FoCY4cXlrsrmIEAL5M3wvRoULldBOQL3YFt2SRqZ1A2WoPwDcyYzg=', 'duongthitam1@fecredit.com.vn', 'Tâm', 'Dương Thị', 'F', '', '11', '', '1664133155', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('151', '18', 'nguyenthiloan20', 'ea71c09e2a90d9952a5b24939954a81f', '{SSHA512}6/Q7v6DvbS0jVz4NEY4HUn32JGFUO4K9YzhDuV+mogjbZhmQ9Jkg6PDUumAGBweune5cyx5uNigls8ekMQ191zMxODE=', 'nguyenthiloan20@fecredit.com.vn', 'Loan', 'Nguyễn Thị', 'F', '', '10', '', '1664133156', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('152', '18', 'nguyenthihai13', '0482b4654e43f1e8e89bd01e2668f437', '{SSHA512}4whqS7bARGgumu2bLO8nJ0atsRoyBb47uDzlJTxkJzjNIb0+c+jtP8dd7rBs6kOkLGyCOpWVaZkMLcizhSDyjmU4MGY=', 'nguyenthihai13@fecredit.com.vn', 'Hải', 'Nguyễn Thị', 'F', '', '9', '', '1664133157', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('153', '18', 'huamanhlinh', '83f69778578ffdf14634959313f04640', '{SSHA512}tqXK2dAfFyS6bfO8jnuwU/mLZA4F8jRSE8LGbDSO1rPJYtzz7XwuSGD41r+j7mEt/woNMmgYRIyuYMKnpZD6nmFjN2Y=', 'huamanhlinh@fecredit.com.vn', 'Linh', 'Hứa Mạnh', 'F', '', '5', '', '1664133158', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('154', '18', 'lethithaonhi3', '4e6f1073cf5654e3b83ee09270017a0b', '{SSHA512}ygoDDO+lT4FWLSNUzrox3k+X3NI24N4W3ABRbrO6TZI0y7hh2FM5RpK0I7QHuiQoWVcHa/ZtPZFzb355JWPcGTNkNjU=', 'lethithaonhi3@fecredit.com.vn', 'Nhi', 'Lê Thị Thảo', 'F', '', '9', '', '1664133159', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('155', '18', 'nguyenhothanhvu', '4d2249b6ff8b27828aec8a0333407df0', '{SSHA512}2TmlanEnQgzIQVT9tZ2FIx0vI1ibtgk37q9YDrSIo43DuzzsJ1m1mg0dFwV3HsUDVFV8kKv/Qz649hSWK/uJgGIzNzM=', 'nguyenhothanhvu@fecredit.com.vn', 'Vũ', 'Nguyễn Hồ Thành', 'M', '', '5', '', '1664133160', 'abc', '123', '', '1', '1', '18', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('156', '19', 'hoangthutrang2', '0b8a248750d1d6ff47e6c46cd5a4ae34', '{SSHA512}ARGMla/K8uv9X3qn64eyztYccHi5buwhepV4YqxXlyinGPSwmkke7qs73F+DETrmpBj0cH05NQZUqNQ66XTpyGRhYWQ=', 'hoangthutrang2@fecredit.com.vn', 'Trang', 'Hoàng Thu', 'F', '', '6', '', '1664133197', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('157', '19', 'hohongky', '4cab189580a867094312733a7325339b', '{SSHA512}w5OYbcnY1SZgHaKbP+MubbO/FbtZIJzOY2bGwEW+hh9E8uHbvYmCQ7Ovhzh3bWN06yBXcwS6qGSfDA8zqlcx9zA0MGY=', 'hohongky@fecredit.com.vn', 'Kỳ', 'Hồ Hồng', 'M', '', '3', '', '1664133198', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('158', '19', 'tranvanhao2', 'a72b7a8385b9dd0659dbabdd9bf1378e', '{SSHA512}fKnNktKKfatsm1Zb6dkL9tsGJmt+RUJ++E+Ll8T8yua7a9kpfuFILh56nFGTNNCUe72xqThQ3aY/j8vKVEfmIzYwMmM=', 'tranvanhao2@fecredit.com.vn', 'Hào', 'Trần Văn', 'M', '', '8', '', '1664133199', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('159', '19', 'buivancuong', 'd71e1a0ea0fb903ea5ae56336acaefe3', '{SSHA512}7N4UVwV8vAEpUNQgmE7lrmIPYeqw9drTf50VSD/+B/5tP+rVLbIv/91uw3151V6Lo7b5ulyt1bGAB3iefkcRFjFkZDc=', 'buivancuong@fecredit.com.vn', 'Cường', 'Bùi Văn', 'M', '', '11', '', '1664133201', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('160', '19', 'vothiphuong1', '5758ad5abdee0f623eb7b07ff79b6e36', '{SSHA512}nWsM1nKBiyIhAC6oq9A14n7Lh3aF1Y+lAon0VmuOgJ14wj2elNvVdkHbm71DPrjVc/7V/6bbZ6MrcozlKz52TjM2Mzg=', 'vothiphuong1@fecredit.com.vn', 'Phượng', 'Võ Thị', 'F', '', '7', '', '1664133202', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('161', '19', 'buithithuy7', 'd73f369a3dd2691b2d0a513ae6a18e74', '{SSHA512}JtLHEa9f9LoyUYNFT/tAiPvvSbay0W6ARLQgXs7h74wUHBqg1yEYpqFLKiOS/MhrLIoAzeBQjfgcQUhwhxR8l2U4YjE=', 'buithithuy7@fecredit.com.vn', 'Thúy', 'Bùi Thị', 'F', '', '5', '', '1664133203', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('162', '19', 'hoangthihang7', '8fbc1d775b3cb2fb453a6ae9f62c2e3e', '{SSHA512}V6BZcMyMMM2NEiZ8ePtb2HvFUsc9881QnG4rfv2ZGx/U7xqs3oo1HlsOZJ7Fa/Uh4T54PTD1n9RCweDwAE4mkTQ4ZGI=', 'hoangthihang7@fecredit.com.vn', 'Hằng', 'Hoàng Thị', 'F', '', '8', '', '1664133204', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('163', '19', 'hothithanh1', '1f49c6ed01f56f9305ad1b53c2b20b14', '{SSHA512}DNLycx6GCjBdPCyLa0nt6F+ysJy1yJKAZikLvd2BfCi8yHJrXZrIAuVUEVVvVHfFvxK4Cr9WpkMODxA7fIifqGM2MWE=', 'hothithanh1@fecredit.com.vn', 'Thanh', 'Hồ Thị', 'F', '', '5', '', '1664133205', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('164', '19', 'lethingan4', '7f563fe79bf3973a7c42a48ab1961117', '{SSHA512}qolbi07nhYVBjJjlUn5Zo4XLVCmcFlBOsjorIA0WkeUi5AabMUT7DHFT1gXrrUBL/AEZy+5+0yC2kdUJyxrz2DRhMGY=', 'lethingan4@fecredit.com.vn', 'Ngân', 'Lê Thị', 'F', '', '2', '', '1664133206', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('165', '19', 'nguyenthimai26', '5d3f988f22e29e8e80f933accb39cd54', '{SSHA512}Rb0HsCCGpxFlY+ZuSeG9wgO6tCpIlSgvetNDlndTq/Cieb1MF3Hk9ODNWgcIz1bTuhFzvQP4j0ACmIrlkAn2nGJkZDQ=', 'nguyenthimai26@fecredit.com.vn', 'Mai', 'Nguyễn Thị', 'F', '', '9', '', '1664133208', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('166', '19', 'lemanhcuong5', '9680b57b8b89180955d6c229f46f9c41', '{SSHA512}IzwTJSH6JYGxq0Cd+FH9DQOA62K3b0HrCeYV/ddP3kGbPaxBF/6hRXifbXC53xbkpuQRJeyMXJtfUMKixEacIDIxYjA=', 'lemanhcuong5@fecredit.com.vn', 'Cường', 'Lê Mạnh', 'M', '', '5', '', '1664133209', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('167', '19', 'nguyenthihoa43', '1c1e298f1015f973c1978773df99394f', '{SSHA512}Yic07fZ5alTdo97IpPTR/ivdJDreqDdWaUn6FD6TThoZnMc5VVXIf4F7aIIsXtVVvU0uwt2Eb75qVoe7DMfXF2I0MTk=', 'nguyenthihoa43@fecredit.com.vn', 'Hoa', 'Nguyễn Thị', 'F', '', '3', '', '1664133210', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('168', '19', 'daothithuhien', '6fc8eb150db6677dd40ccb4c63b03ee8', '{SSHA512}8pm7ItYoQncwIj6O7S+m5AMW5griHmXaXwKQJdKUWFjQKyYlbkaQjZMrduJvYU2AOKhHUpSbSlL3SWlsUL2SAGI3ZWE=', 'daothithuhien@fecredit.com.vn', 'Hiền', 'Đào Thị Thu', 'F', '', '9', '', '1664133211', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('169', '19', 'tranvantin1', '6dafb3fd82cbea06a260e61fef5cc5d6', '{SSHA512}2TYYPq+SwF0O4F+6mjLZ3WQ+NjlQ1/Pu9swCiBLrHTptvgCV3NOzsqvwSuG2FSRCY6elxf/ZKNHnX1xT9teeQ2E5ZjM=', 'tranvantin1@fecredit.com.vn', 'Tín', 'Trần Văn', 'M', '', '10', '', '1664133212', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('170', '19', 'nguyenthiquynh13', '23efc2a6b5efd5c12c039d2498db40ff', '{SSHA512}pvu7Zqfrz3groWdNq+/wEXw43jiSDIMwOHPCVPPw2UIUAdLv3NzPKSWDr+QQIRj3Iq6X/1eB5HmAoAlHScM/MDM2NTM=', 'nguyenthiquynh13@fecredit.com.vn', 'Quỳnh', 'Nguyễn Thị', 'F', '', '8', '', '1664133213', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('171', '19', 'nguyenthihaiyen38', '4e2180d7152b0536f5a4ce32f4ecd33d', '{SSHA512}RbrRDTOTMwDicRJAcnaNDzqBQlhv4PpjgTnp72XGTbqTgS0E01rjSYXtuhekXIIaYY7TUCPZyanIdVH44K3BTTk5MGE=', 'nguyenthihaiyen38@fecredit.com.vn', 'Yến', 'Nguyễn Thị Hải', 'F', '', '12', '', '1664133215', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('172', '19', 'lothikimtrang', 'c523d316315f34701c2c835d0ab30fd4', '{SSHA512}HkobkPJcV3vdMeZW1rCPrcTySXBGB5pXlXGRhmaqK9jqk1HMiSQeB63XCNmY8E5VSspbyumVItHvlSncklu9UTY0ZjI=', 'lothikimtrang@fecredit.com.vn', 'Trang', 'Lô Thị Kim', 'F', '', '10', '', '1664133216', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('173', '19', 'thaithithuhoai', 'cd89423ecf1b1d2ab3d66cb4f0845999', '{SSHA512}CVMYQpzlmBiu+UiDT4gwzgDyNDkyyM7imSWfEI/hJnIXRrNTEu8+d1oBis2DBeSDMxdRVCo92lT72Z/szQNxJzc0NTg=', 'thaithithuhoai@fecredit.com.vn', 'Hoài', 'Thái Thị Thu', 'F', '', '4', '', '1664133217', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('174', '19', 'caothihonglien', 'a6cdf01374b6d6ce199c32828975333c', '{SSHA512}u1uSMZxS+pE4KUXkdkzePJJP8U8M0zJedbkmaqMoLSDtiZYvn05JTIuueScfSAbb1NvXHtTVIMl2i7TC0JZhYGI3YmQ=', 'caothihonglien@fecredit.com.vn', 'Liên', 'Cao Thị Hồng', 'F', '', '9', '', '1664133218', 'abc', '123', '', '1', '1', '19', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('175', '20', 'caonhusuc', '8578af57dbf4c7d7bb3d93cb0f7d7c51', '{SSHA512}eNaNTdN35lgz/e+VNmKq8a59xA8Ns07zGnI5+FXzmRzU0ieFQts5A7u930iaJF93mBlaKh8M1oH4ZBp/E3ojsGI2OWQ=', 'caonhusuc@fecredit.com.vn', 'Sức', 'Cao Như', 'M', '', '10', '', '1664133253', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('176', '20', 'nguyenthainguyen1', '2842a26c4efe313f0bab97908bcd34a1', '{SSHA512}CXOUBzqBQsRG51ocgM+2WinAStXdcKJysu0qMQnrkrLVOreGFinYXjdoWUsVa0eIe84EgDVM9Q19VY7gm9Fq/GE0N2I=', 'nguyenthainguyen1@fecredit.com.vn', 'Nguyên', 'Nguyễn Thái', 'M', '', '6', '', '1664133254', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('177', '20', 'lethihuong21', '80bf88dc81170d5bd4ce6ec5c15df72e', '{SSHA512}cBaOEfdR5hOVg7+aWJF+7cFOSoKEOaFyfe8Xgjdp4YHFJQPMWSZQT2zFtGoPSwcBTQnhfMAM9K73sPYWq2IjtzdiNWM=', 'lethihuong21@fecredit.com.vn', 'Hưởng', 'Lê Thị', 'F', '', '4', '', '1664133256', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('178', '20', 'buiduydiep', '17d461bec96e6eecacfc7a7c40a4e992', '{SSHA512}5wovnKvSgAhKswS0vM3ZnMa2HmysBzfQ6ay0Kd7KM3KxxyvQe5yHy52eXD2NIo4kT/Hj6ymzUBVamgnqBgFbUGJjOWU=', 'buiduydiep@fecredit.com.vn', 'Điệp', 'Bùi Duy', 'M', '', '10', '', '1664133257', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('179', '20', 'nguyenngochai', '72dc28962384ee2c2b5a09d4c9f583ec', '{SSHA512}BD5PQAM5IS8o5Klm7XXZHcbQVrQHonsD9mxXxUiieEU0FTAn/fF0J4ytsEH2/3HxMoLF+JOhDapcPCBqRZg8d2E3Njc=', 'nguyenngochai@fecredit.com.vn', 'Hải', 'Nguyễn Ngọc', 'M', '', '10', '', '1664133258', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('180', '20', 'phamthetruong', '5db0b385f96cc874843d6ffc471e7efc', '{SSHA512}1zzFyreKxtCsZ+eExKrRFkLa0iMruO1QyS+5FZLzwFfmL2UN/5+PqcXZuSUqrtnL2dqiRqNpQuAQiJHYqdHq0mU1NzU=', 'phamthetruong@fecredit.com.vn', 'Trường', 'Phạm Thế', 'M', '', '5', '', '1664133259', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('181', '20', 'tranvanduy5', '9be7cdcdeb53ad36396e6bb9f50761cd', '{SSHA512}IAp39qyoLJ0jD0A96Eb9twjCySGKKTqGSw0yb6nXtTs1qkbXHwdeljUg6Pw8Mp0R0p+TxH+EiLv5nvcF1QvC+TM1ZDQ=', 'tranvanduy5@fecredit.com.vn', 'Duy', 'Trần Văn', 'M', '', '9', '', '1664133260', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('182', '20', 'phamthiphuong17', '5f4802549838e2e393ca097002e9b534', '{SSHA512}aUu+u1dZhkU7/u1jx4EIAIm52pTaXPI0tM8R0DUT5113enBdjV//cR9AHW+TGlZKBoKbBl9SiZaD3TdLj99Q02M2ZTU=', 'phamthiphuong17@fecredit.com.vn', 'Phương', 'Phạm Thị', 'F', '', '12', '', '1664133261', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('183', '20', 'phamthidau', 'd874b9e8524b3596613ca46c21f83e2a', '{SSHA512}zA6pKsDy8AwhwkF4dENDCJ/HsxYzEANlGowq9rYB00biGAn49EG7EDdU7EL6NZASR5eHyGbKvP6e6bm1JEArSzMyMDE=', 'phamthidau@fecredit.com.vn', 'Dâu', 'Phạm Thị', 'F', '', '5', '', '1664133263', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('184', '20', 'tranthinhuquynh5', 'c179564891a6176f5ea6513d4dac65b5', '{SSHA512}KT/9v3u0aVSMLw0lnelJvuXmdHOfNEajPnptBzSF1I/iD3j4XjlVqXMz4yzv5b9JFj/E7ixeY1ghpjEONVB++TJhNmQ=', 'tranthinhuquynh5@fecredit.com.vn', 'Quỳnh', 'Trần Thị Như', 'F', '', '10', '', '1664133264', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('185', '20', 'vuthinga5', '7650ece066aa348a1159c6d46fc29b1f', '{SSHA512}/nXnR+wfNC5E5VpIdtQRPwM3C6XiQ/DARfrM4hMTCoiBtSDvmcTbyWRFkaC/nFzmNyzIAxqSkwFkPKhf3osraWY5MWE=', 'vuthinga5@fecredit.com.vn', 'Nga', 'Vũ Thị', 'F', '', '3', '', '1664133265', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('186', '20', 'tanthikhanh1', '3280468fec74dd857aed5966420241b6', '{SSHA512}BXVc6D+fzR2I4Szqos8cAy7XTg0eh/uR1CIT4GtwU9yNhOqJuY7oMp9LpK/63/zMXmssKEeD1NajrG9fZj+IjTY0NTQ=', 'tanthikhanh1@fecredit.com.vn', 'Khánh', 'Tẩn Thị', 'F', '', '3', '', '1664133266', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('187', '20', 'trinhthikimoanh2', '2e13f007a3297d8079ec80cbc4b1522f', '{SSHA512}BX+M5WD+gTN8Sc2LZAqjvjZHdBBSkUa46h1tYYxRHD7L+HDBD9HZ9xvzi16N1GQULQ7Ve6p1HKa2aRtFjiNAVTYwYTM=', 'trinhthikimoanh2@fecredit.com.vn', 'Oanh', 'Trịnh Thị Kim', 'F', '', '2', '', '1664133267', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('188', '20', 'caothithuy1', '36a3cc7f434313331eb0f74f7b7ea3b7', '{SSHA512}ymJBQotbCLTkovAQN+qsUEjBg4isYs7d6KsCxa0ZyHldoOjVMDAORDC1AzTCtH98FEtxN94j9S8kPie6PdP/C2YwMTI=', 'caothithuy1@fecredit.com.vn', 'Thủy', 'Cao Thị', 'F', '', '4', '', '1664133268', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('189', '20', 'phamthitheu', '5398e96ca1cb89774b454e73b7a7a094', '{SSHA512}nnneXsB/EWygyDaHoWL+4d4ieYCFrMGhUw1uFgJA/8Ur+QcheXYG3Ys2E+18S3+Fpl4OHGGBUn24O9AHw25Qv2FmMzY=', 'phamthitheu@fecredit.com.vn', 'Thêu', 'Phạm Thị', 'F', '', '9', '', '1664133270', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('190', '20', 'tranthithuylinh6', 'c4b628d1aaf091570843f430bd753104', '{SSHA512}l8VboDsJMrJQhbEI3WMaU17opFO/dCpawhSvluf8HVQBjfolg1b0gskkvnTshGhjBsAjt3xRl2Liqk718YVNEjRlOGU=', 'tranthithuylinh6@fecredit.com.vn', 'Linh', 'Trần Thị Thùy', 'F', '', '9', '', '1664133271', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('191', '20', 'phamhongson', 'f1ea6154da4244ad967d545520ec3c30', '{SSHA512}TGimz1e+DA7m+OL8koXzyFm+fseVbbKraNW58Ry9xY2j+zmIfwzNeGhPCAENhTMsJqacl7kEZPDtL4dbFCIn9GJkMzk=', 'phamhongson@fecredit.com.vn', 'Sơn', 'Phạm Hồng', 'M', '', '11', '', '1664133272', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('192', '20', 'nguyenthikieulam', '31b3b0e7a1520d34fae59954196de575', '{SSHA512}eElqUIk6dfwS7EIMMllEelCVtwXEKbCG0jOiI1TVdh5Qzpu0aZCE+QPXQifC1LBDwp+sUVmDLl6Ft7jxKBzHxGVlZDM=', 'nguyenthikieulam@fecredit.com.vn', 'Lâm', 'Nguyễn Thị Kiều', 'F', '', '12', '', '1664133273', 'abc', '123', '', '1', '1', '20', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('193', '21', 'phamngocduc', '29a4dda8ec1f93db96fac65a34d29db7', '{SSHA512}8yIvx0u1wrlhThCBib74joO+77T/cR+5Hqs4q+5/XFXLB2dW2BbKakNEBwtmruYfMu73x70KHSOVUVR5cRq7fDg4NzA=', 'phamngocduc@fecredit.com.vn', 'Đức', 'Phạm Ngọc', 'M', '', '9', '', '1664133381', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('194', '21', 'luongvandoan', '82c84f82aae253f8e8442f3f33ce8a60', '{SSHA512}hOrRTolr5Syp7bMJ9BN7pSiC/0gQt0LvQYLUCz05R3yUvIDE+3b5rEAgWj+zOOFKdBbNK6sZuHQa7Ud28TtW8zg2OTQ=', 'luongvandoan@fecredit.com.vn', 'Đoàn', 'Lương Văn', 'M', '', '2', '', '1664133382', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('195', '21', 'nguyenmanhcuong9', 'bf47d2a886ca0974f45a5467bdb8df39', '{SSHA512}sI3dxsBeQ/Hlv8k2T9+0WSxc1b8O5jEB4PO2aQP4aCviv0KdPhyYDnC0CtBTMBVCWo6s+z83/2Cjiq4ZjN0rxGNmN2I=', 'nguyenmanhcuong9@fecredit.com.vn', 'Cường', 'Nguyễn Mạnh', 'M', '', '6', '', '1664133383', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('196', '21', 'phamvantan1', '4d724f62a107c0626f20c3f5f25526a2', '{SSHA512}lASzJ7Md0FgFvZJMjWQ/FHclfwYOTQvvPVFa4kmeiIEIG0VhGG44HeY1v1a+2SbXKnb3D9lnKVXBl53FZ6VlKWNkMTc=', 'phamvantan1@fecredit.com.vn', 'Tân', 'Phạm Văn', 'M', '', '6', '', '1664133384', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('197', '21', 'phamtrannguyen', 'b6a3234e98331161af842bc937c3c8c6', '{SSHA512}ZG+hxpNQmMuhGtfxMXQOOPNwk2KBu6/7xnFuWY7CW5DaGY4KxnMiFS9eesahOYrQBX2ZljfGpGfX+u9xlHPv3zU3OGU=', 'phamtrannguyen@fecredit.com.vn', 'Nguyên', 'Phạm Trần', 'M', '', '7', '', '1664133386', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('198', '21', 'letrungha1', '30b5565bfa97604511ee1fcd889e088e', '{SSHA512}CAe4ZAq/ApxZ1IpIKqUabCYkdWXoMNX6JDnjerVa8myT/iWQVE04OCC//irtGsFmD7UaTbhMwul2mtybnSW2qTFjZGM=', 'letrungha1@fecredit.com.vn', 'Hà', 'Lê Trung', 'M', '', '7', '', '1664133387', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('199', '21', 'dinhmanhtung', 'c3cee7b6e634faec5154fcfc239799ef', '{SSHA512}B51PjqoJqAjJ16QELJvz76vtGmR0UaauHB18tyugybMPCWFkZj89e2O1mNWU8Qz+awiRFzLhvku9n0nKlJV82jc0YTU=', 'dinhmanhtung@fecredit.com.vn', 'Tùng', 'Đinh Mạnh', 'M', '', '2', '', '1664133388', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('200', '21', 'nguyenquoctrung10', '7a3b4f56c67ff13c6dc6b93136b5ba16', '{SSHA512}b6SNIOniSJh8GGuLbJ9nEupcGNZp/9HjXKTmqZcbMxcXFFpJKB8P+uDNBmU5s5xFH6/4EnvbvR421SZNDHNY72UxNjM=', 'nguyenquoctrung10@fecredit.com.vn', 'Trung', 'Nguyễn Quốc', 'M', '', '9', '', '1664133389', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('201', '21', 'nguyenquangthuan4', 'e893ee7508a93920d3835f79c1bfb10a', '{SSHA512}p0l0CpH0w3vYf+8VbREx3ZDrMr8oWv90pqF4o/ZD61rLq1DqlIZUrCI2At4upeedIPLy8A+i4fsKoi8MquciZThkNDI=', 'nguyenquangthuan4@fecredit.com.vn', 'Thuận', 'Nguyễn Quang', 'M', '', '6', '', '1664133390', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('202', '21', 'phamthilua1', 'd77e832af776ee786cf88f0ddd917fab', '{SSHA512}9lo2S2dcCc60K7AIol3UKyO12trhK4PJ5pnHhutrp74izEKUGv5eIvic3opUvZgiTMoyKHFtspMjcKFyyxCMAzhhNmU=', 'phamthilua1@fecredit.com.vn', 'Lụa', 'Phạm Thị', 'F', '', '6', '', '1664133391', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('203', '21', 'nguyenthithao53', '8e60060f0ebaa2e307e429ca812ce188', '{SSHA512}UZOtlVfQbZXcUZvmw107o9aX2D3e1O/19EZkLZBOEAYNlaRrOSxf7Yt8BCNm8HU4FQtSfzYTl6smkLJzgpdc3jNlOGU=', 'nguyenthithao53@fecredit.com.vn', 'Thảo', 'Nguyễn Thị', 'F', '', '8', '', '1664133393', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('204', '21', 'phamhuyentrang1', 'a01df991bcacc8d6777bc358279a1b22', '{SSHA512}E8xUc8RANmmrRa/IWnhSrCt5BM2zHuhsKIAYZ+eTf8bQ6fKh+aYnlkoK4d507TO+SBxllXW3vzcrpXsE65ug9jFmZmU=', 'phamhuyentrang1@fecredit.com.vn', 'Trang', 'Phạm Huyền', 'F', '', '6', '', '1664133394', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('205', '21', 'phamhailong1', '1f7a3cf59eefff64351b21b8ea018157', '{SSHA512}iUDSKmNG3+0ktAoW3ql2LArov04GX+rDVEDxQVY/+rEVN8by5w8Ag+Llk64WByFJKxa8o5fsGUjrPdYW7nEK22IzOWM=', 'phamhailong1@fecredit.com.vn', 'Long', 'Phạm Hải', 'M', '', '12', '', '1664133395', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('206', '21', 'duongthithuylinh3', '486bd11aee15a1e776ebb0d97f5c545e', '{SSHA512}lKQprwk03KIxj7Q/7ybrEJqC/mAvIHg0+OZ2z/tAc7Yli4RrEEFxQjYlLlzrLpVO9SZC+A5EjhF6ZWt+onJ4gDQ3ODQ=', 'duongthithuylinh3@fecredit.com.vn', 'Linh', 'Dương Thị Thuỳ', 'F', '', '12', '', '1664133396', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('207', '21', 'nguyenthithuhuong20', 'd4791f849f016f176a592026e0fb7e44', '{SSHA512}iLswZs69ga/hRAplpTwxgg+tSr5VzVaQEp26eQQdyFI4ZuX68coiWxmHC+QWA+WnXBE1v/txqCHv9Ol16mPEzTU3NTA=', 'nguyenthithuhuong20@fecredit.com.vn', 'Hương', 'Nguyễn Thị Thu', 'F', '', '9', '', '1664133397', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('208', '21', 'nguyenthithuylinh29', '7dcfa60e415989b9d3dd6409f3e8549b', '{SSHA512}sGyEDPuiyJ/3BlAigYZoWN3lQkItYJJpGwyWhlFht1QqnY72YiBXFZU1uMblsXcqnnnEJVAfqHL9s3MxoG+3zjY0MWI=', 'nguyenthithuylinh29@fecredit.com.vn', 'Linh', 'Nguyễn Thị Thùy', 'F', '', '4', '', '1664133399', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('209', '21', 'nguyenthiha26', '14fa6beca020a916801c3a88d9a04373', '{SSHA512}7klUwebopwyvkmPPOAhV6Du+Lrt7pbLEY0DXlIHGwPISF4KZNq26S8wDqidz1exzkEBumGrWpTZdnnbOiRbVjzAwMGU=', 'nguyenthiha26@fecredit.com.vn', 'Hà', 'Nguyễn Thị', 'F', '', '11', '', '1664133400', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . " (userid, group_id, username, md5username, password, email, first_name, last_name, gender, photo, birthday, sig, regdate, question, answer, passlostkey, view_mail, remember, in_groups, active, active2step, secretkey, checknum, last_login, last_ip, last_agent, last_openid, last_update, idsite, safemode, safekey, email_verification_time, active_obj) VALUES('210', '21', 'duongquocbinh', 'd4549df7fa4b185ff9d680c8919bfe85', '{SSHA512}lnQx5ZWoBmkTlrpgTgrJXZkqU6BqJmr1BGQtgRFfSBZw9zVoefMlKJQyyObGSomSauDVk8bf4CAkPNYuFqJxSDEzNTY=', 'duongquocbinh@fecredit.com.vn', 'Bình', 'Dương Quốc', 'M', '', '1', '', '1664133401', 'abc', '123', '', '1', '1', '21', '1', '0', '', '', '0', '', '', '', '0', '0', '0', '', '-1', 'SYSTEM')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('1', 'first_name', '1', 'textbox', '', '', 'none', '', '', '0', '100', '1', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:4:\"Tên\";i:1;s:0:\"\";}}', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('2', 'last_name', '2', 'textbox', '', '', 'none', '', '', '0', '100', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:20:\"Họ và tên đệm\";i:1;s:0:\"\";}}', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('3', 'gender', '3', 'select', 'a:3:{s:1:\"N\";s:0:\"\";s:1:\"M\";s:0:\"\";s:1:\"F\";s:0:\"\";}', '', 'none', '', '', '0', '1', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:12:\"Giới tính\";i:1;s:0:\"\";}}', '2', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('4', 'birthday', '4', 'date', 'a:1:{s:12:\"current_date\";i:0;}', '', 'none', '', '', '0', '0', '1', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Ngày tháng năm sinh\";i:1;s:0:\"\";}}', '0', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('5', 'sig', '5', 'textarea', '', '', 'none', '', '', '0', '1000', '0', '0', '0', '0', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:9:\"Chữ ký\";i:1;s:0:\"\";}}', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('6', 'question', '6', 'textbox', '', '', 'none', '', '', '3', '255', '1', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Câu hỏi bảo mật\";i:1;s:0:\"\";}}', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('7', 'answer', '7', 'textbox', '', '', 'none', '', '', '3', '255', '1', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:22:\"Trả lời câu hỏi\";i:1;s:0:\"\";}}', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('11', 'code', '9', 'textbox', '', '', 'none', '', '', '0', '255', '1', '1', '0', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:15:\"Mã nhân viên\";i:1;s:0:\"\";}}', '', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('9', 'phone', '8', 'textbox', '', '', 'none', '', '', '0', '255', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:15:\"Điện thoại\";i:1;s:0:\"\";}}', '', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('13', 'bank_card', '10', 'textbox', '', '', 'none', '', '', '0', '255', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:24:\"Tài khoản ngân hàng\";i:1;s:0:\"\";}}', '0', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('15', 'start_working', '11', 'date', 'a:1:{s:12:\"current_date\";i:1;}', '', 'none', '', '', '0', '0', '0', '0', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:31:\"Ngày chính thức làm việc\";i:1;s:0:\"\";}}', '0', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('16', 'date_cmnd', '12', 'textbox', '', '', 'none', '', '', '0', '255', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:21:\"Ngày cấp CMND/CCCD\";i:1;s:0:\"\";}}', '0', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_field (fid, field, weight, field_type, field_choices, sql_choices, match_type, match_regex, func_callback, min_length, max_length, required, show_register, user_editable, show_profile, class, language, default_value, is_system) VALUES('17', 'cmnd', '13', 'textbox', '', '', 'none', '', '', '0', '255', '0', '1', '1', '1', 'input', 'a:1:{s:2:\"vi\";a:2:{i:0;s:14:\"Số CMND/CCCD\";i:1;s:0:\"\";}}', '0', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('1', 'Super-Admin', '', '0', '', '', '0', '0', '0', '1662650678', '0', '1', '1', '0', '1', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('2', 'General-Admin', '', '0', '', '', '0', '0', '0', '1662650678', '0', '2', '1', '0', '1', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('3', 'Module-Admin', '', '0', '', '', '0', '0', '0', '1662650678', '0', '3', '1', '0', '1', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('4', 'Users', '', '0', '', '', '0', '0', '0', '1662650678', '0', '4', '0', '0', '152', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('7', 'New-Users', '', '0', '', '', '0', '0', '0', '1662650678', '0', '5', '0', '0', '0', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('5', 'Guest', '', '0', '', '', '0', '0', '0', '1662650678', '0', '6', '1', '0', '0', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:0;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:0;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('6', 'All', '', '0', '#337cb0', '104411152_251065566196431_477579537720662414_n.jpg', '0', '0', '0', '1662650678', '0', '7', '1', '0', '0', '0', '', '1')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('15', 'HATINH02', '', '1', '', '', '0', '0', '0', '1663726372', '0', '11', '1', '0', '12', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:0;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('13', 'ASM', '', '1', '', '', '0', '0', '0', '1662650941', '0', '8', '1', '0', '2', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:1;s:13:\"access_passus\";i:1;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('14', 'HATINH01', '', '1', '', '', '0', '0', '1', '1662654291', '0', '10', '1', '0', '22', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('16', 'HATINH03', '', '1', '', '', '0', '0', '0', '1663726389', '0', '12', '1', '0', '20', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:0;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('17', 'NGHEAN03', '', '1', '', '', '0', '0', '0', '1663726410', '0', '13', '1', '0', '20', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('18', 'NGHEAN04', '', '1', '', '', '0', '0', '0', '1663726423', '0', '14', '1', '0', '20', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('19', 'NGHEAN06', '', '1', '', '', '0', '0', '0', '1663726432', '0', '15', '1', '0', '20', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('20', 'NAMDINH02', '', '1', '', '', '0', '0', '0', '1663726449', '0', '16', '1', '0', '19', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('21', 'NAMDINH03', '', '1', '', '', '0', '0', '0', '1663726458', '0', '17', '1', '0', '19', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:0;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups (group_id, alias, email, group_type, group_color, group_avatar, require_2step_admin, require_2step_site, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus, config, is_system) VALUES('22', 'Sup-Sale', '', '0', '', '', '0', '0', '0', '1663767039', '0', '9', '1', '0', '8', '0', 'a:7:{s:17:\"access_groups_add\";i:1;s:17:\"access_groups_del\";i:1;s:12:\"access_addus\";i:1;s:14:\"access_waiting\";i:1;s:13:\"access_editus\";i:1;s:12:\"access_delus\";i:1;s:13:\"access_passus\";i:0;}', '0')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('1', 'vi', 'Super Admin', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('2', 'vi', 'General Admin', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('3', 'vi', 'Module Admin', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('4', 'vi', 'Users', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('7', 'vi', 'New Users', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('5', 'vi', 'Guest', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('6', 'vi', 'All', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('10', 'vi', 'Người hâm mộ', 'Nhóm những người hâm mộ hệ thống NukeViet', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('11', 'vi', 'Người quản lý', 'Nhóm những người quản lý website xây dựng bằng hệ thống NukeViet', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('12', 'vi', 'Lập trình viên', 'Nhóm Lập trình viên hệ thống NukeViet', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('13', 'vi', 'ASM', 'Giám đốc vùng', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('14', 'vi', 'HATINH01', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('15', 'vi', 'HATINH02', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('16', 'vi', 'HATINH03', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('17', 'vi', 'NGHEAN03', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('18', 'vi', 'NGHEAN04', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('19', 'vi', 'NGHEAN06', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('20', 'vi', 'NAMDINH02', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('21', 'vi', 'NAMDINH03', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_detail (group_id, lang, title, description, content) VALUES('22', 'vi', 'Sup Sale', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('1', '1', '1', '1', '0', '1662650715', '1662650715')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('13', '2', '0', '1', '0', '1662651190', '1662651190')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('3', '2', '0', '1', '0', '1662651236', '1662651236')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '65', '1', '1', '0', '1664132353', '1664132353')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '66', '0', '1', '0', '1664132293', '1664132293')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('13', '5', '0', '1', '0', '1663731144', '1663731144')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '62', '1', '1', '0', '1664132399', '1664132399')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('2', '5', '0', '1', '0', '1663731248', '1663731248')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '66', '1', '1', '0', '1664132457', '1664132457')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '64', '1', '1', '0', '1664132509', '1664132509')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '63', '1', '1', '0', '1664132538', '1664132538')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '60', '1', '1', '0', '1664132550', '1664132550')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '59', '1', '1', '0', '1664132579', '1664132579')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '61', '1', '1', '0', '1664132593', '1664132593')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '67', '0', '1', '0', '1664132754', '1664132754')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '68', '0', '1', '0', '1664132756', '1664132756')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '59', '0', '1', '0', '1664132285', '1664132285')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '60', '0', '1', '0', '1664132286', '1664132286')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '61', '0', '1', '0', '1664132287', '1664132287')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '62', '0', '1', '0', '1664132288', '1664132288')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '63', '0', '1', '0', '1664132290', '1664132290')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '64', '0', '1', '0', '1664132291', '1664132291')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('22', '65', '0', '1', '0', '1664132292', '1664132292')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '69', '0', '1', '0', '1664132757', '1664132757')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '70', '0', '1', '0', '1664132758', '1664132758')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '71', '0', '1', '0', '1664132759', '1664132759')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '72', '0', '1', '0', '1664132761', '1664132761')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '73', '0', '1', '0', '1664132763', '1664132763')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '74', '0', '1', '0', '1664132765', '1664132765')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '75', '0', '1', '0', '1664132766', '1664132766')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '76', '0', '1', '0', '1664132767', '1664132767')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '77', '0', '1', '0', '1664132768', '1664132768')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '78', '0', '1', '0', '1664132769', '1664132769')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '79', '0', '1', '0', '1664132771', '1664132771')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '80', '0', '1', '0', '1664132772', '1664132772')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '81', '0', '1', '0', '1664132773', '1664132773')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '82', '0', '1', '0', '1664132774', '1664132774')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '83', '0', '1', '0', '1664132775', '1664132775')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '84', '0', '1', '0', '1664132776', '1664132776')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '85', '0', '1', '0', '1664132778', '1664132778')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '86', '0', '1', '0', '1664132779', '1664132779')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('14', '87', '0', '1', '0', '1664132780', '1664132780')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '88', '0', '1', '0', '1664132853', '1664132853')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '89', '0', '1', '0', '1664132854', '1664132854')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '90', '0', '1', '0', '1664132855', '1664132855')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '91', '0', '1', '0', '1664132856', '1664132856')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '92', '0', '1', '0', '1664132857', '1664132857')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '93', '0', '1', '0', '1664132859', '1664132859')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '94', '0', '1', '0', '1664132860', '1664132860')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '95', '0', '1', '0', '1664132861', '1664132861')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '96', '0', '1', '0', '1664132862', '1664132862')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '97', '0', '1', '0', '1664132863', '1664132863')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('15', '98', '0', '1', '0', '1664132865', '1664132865')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '99', '0', '1', '0', '1664132951', '1664132951')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '100', '0', '1', '0', '1664132953', '1664132953')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '101', '0', '1', '0', '1664132954', '1664132954')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '102', '0', '1', '0', '1664132955', '1664132955')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '103', '0', '1', '0', '1664132956', '1664132956')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '104', '0', '1', '0', '1664132957', '1664132957')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '105', '0', '1', '0', '1664132958', '1664132958')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '106', '0', '1', '0', '1664132960', '1664132960')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '107', '0', '1', '0', '1664132961', '1664132961')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '108', '0', '1', '0', '1664132962', '1664132962')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '109', '0', '1', '0', '1664132963', '1664132963')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '110', '0', '1', '0', '1664132964', '1664132964')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '111', '0', '1', '0', '1664132965', '1664132965')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '112', '0', '1', '0', '1664132967', '1664132967')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '113', '0', '1', '0', '1664132968', '1664132968')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '114', '0', '1', '0', '1664132969', '1664132969')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '115', '0', '1', '0', '1664132970', '1664132970')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '116', '0', '1', '0', '1664132971', '1664132971')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('16', '117', '0', '1', '0', '1664132972', '1664132972')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '118', '0', '1', '0', '1664133070', '1664133070')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '119', '0', '1', '0', '1664133071', '1664133071')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '120', '0', '1', '0', '1664133072', '1664133072')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '121', '0', '1', '0', '1664133073', '1664133073')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '122', '0', '1', '0', '1664133074', '1664133074')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '123', '0', '1', '0', '1664133075', '1664133075')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '124', '0', '1', '0', '1664133077', '1664133077')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '125', '0', '1', '0', '1664133078', '1664133078')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '126', '0', '1', '0', '1664133079', '1664133079')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '127', '0', '1', '0', '1664133080', '1664133080')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '128', '0', '1', '0', '1664133081', '1664133081')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '129', '0', '1', '0', '1664133082', '1664133082')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '130', '0', '1', '0', '1664133084', '1664133084')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '131', '0', '1', '0', '1664133085', '1664133085')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '132', '0', '1', '0', '1664133086', '1664133086')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '133', '0', '1', '0', '1664133087', '1664133087')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '134', '0', '1', '0', '1664133088', '1664133088')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '135', '0', '1', '0', '1664133089', '1664133089')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('17', '136', '0', '1', '0', '1664133091', '1664133091')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '137', '0', '1', '0', '1664133139', '1664133139')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '138', '0', '1', '0', '1664133141', '1664133141')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '139', '0', '1', '0', '1664133142', '1664133142')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '140', '0', '1', '0', '1664133143', '1664133143')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '141', '0', '1', '0', '1664133144', '1664133144')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '142', '0', '1', '0', '1664133145', '1664133145')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '143', '0', '1', '0', '1664133146', '1664133146')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '144', '0', '1', '0', '1664133148', '1664133148')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '145', '0', '1', '0', '1664133149', '1664133149')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '146', '0', '1', '0', '1664133150', '1664133150')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '147', '0', '1', '0', '1664133151', '1664133151')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '148', '0', '1', '0', '1664133152', '1664133152')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '149', '0', '1', '0', '1664133153', '1664133153')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '150', '0', '1', '0', '1664133155', '1664133155')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '151', '0', '1', '0', '1664133156', '1664133156')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '152', '0', '1', '0', '1664133157', '1664133157')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '153', '0', '1', '0', '1664133158', '1664133158')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '154', '0', '1', '0', '1664133159', '1664133159')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('18', '155', '0', '1', '0', '1664133160', '1664133160')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '156', '0', '1', '0', '1664133197', '1664133197')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '157', '0', '1', '0', '1664133198', '1664133198')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '158', '0', '1', '0', '1664133199', '1664133199')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '159', '0', '1', '0', '1664133201', '1664133201')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '160', '0', '1', '0', '1664133202', '1664133202')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '161', '0', '1', '0', '1664133203', '1664133203')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '162', '0', '1', '0', '1664133204', '1664133204')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '163', '0', '1', '0', '1664133205', '1664133205')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '164', '0', '1', '0', '1664133206', '1664133206')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '165', '0', '1', '0', '1664133208', '1664133208')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '166', '0', '1', '0', '1664133209', '1664133209')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '167', '0', '1', '0', '1664133210', '1664133210')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '168', '0', '1', '0', '1664133211', '1664133211')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '169', '0', '1', '0', '1664133212', '1664133212')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '170', '0', '1', '0', '1664133213', '1664133213')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '171', '0', '1', '0', '1664133215', '1664133215')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '172', '0', '1', '0', '1664133216', '1664133216')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '173', '0', '1', '0', '1664133217', '1664133217')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('19', '174', '0', '1', '0', '1664133218', '1664133218')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '175', '0', '1', '0', '1664133253', '1664133253')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '176', '0', '1', '0', '1664133254', '1664133254')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '177', '0', '1', '0', '1664133256', '1664133256')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '178', '0', '1', '0', '1664133257', '1664133257')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '179', '0', '1', '0', '1664133258', '1664133258')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '180', '0', '1', '0', '1664133259', '1664133259')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '181', '0', '1', '0', '1664133260', '1664133260')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '182', '0', '1', '0', '1664133261', '1664133261')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '183', '0', '1', '0', '1664133263', '1664133263')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '184', '0', '1', '0', '1664133264', '1664133264')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '185', '0', '1', '0', '1664133265', '1664133265')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '186', '0', '1', '0', '1664133266', '1664133266')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '187', '0', '1', '0', '1664133267', '1664133267')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '188', '0', '1', '0', '1664133268', '1664133268')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '189', '0', '1', '0', '1664133270', '1664133270')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '190', '0', '1', '0', '1664133271', '1664133271')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '191', '0', '1', '0', '1664133272', '1664133272')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('20', '192', '0', '1', '0', '1664133273', '1664133273')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '193', '0', '1', '0', '1664133381', '1664133381')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '194', '0', '1', '0', '1664133382', '1664133382')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '195', '0', '1', '0', '1664133383', '1664133383')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '196', '0', '1', '0', '1664133384', '1664133384')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '197', '0', '1', '0', '1664133386', '1664133386')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '198', '0', '1', '0', '1664133387', '1664133387')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '199', '0', '1', '0', '1664133388', '1664133388')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '200', '0', '1', '0', '1664133389', '1664133389')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '201', '0', '1', '0', '1664133390', '1664133390')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '202', '0', '1', '0', '1664133391', '1664133391')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '203', '0', '1', '0', '1664133393', '1664133393')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '204', '0', '1', '0', '1664133394', '1664133394')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '205', '0', '1', '0', '1664133395', '1664133395')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '206', '0', '1', '0', '1664133396', '1664133396')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '207', '0', '1', '0', '1664133397', '1664133397')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '208', '0', '1', '0', '1664133399', '1664133399')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '209', '0', '1', '0', '1664133400', '1664133400')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_groups_users (group_id, userid, is_leader, approved, data, time_requested, time_approved) VALUES('21', '210', '0', '1', '0', '1664133401', '1664133401')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('1', '', 'NA88', '', '0', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('2', '', 'ASM', '', '0', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('5', '0946969708', 'NA03', '', '0', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('59', '', 'DSSND2', '1', '1609434000', '1', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('60', '', 'DSSNA6', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('61', '', 'DSSND3', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('62', '', 'DSSHT2', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('63', '', 'DSSNA4', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('64', '', 'DSSNA3', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('65', '', 'DSSHT1', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('66', '', 'DSSHT3', '', '1609434000', '', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('67', '0978594592', 'DA002194', '040183023884', '1617382800', '6&#x002F;20&#x002F;2007', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('68', '0773333883', 'DA009139', '042088012387', '1717520400', '8&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('69', '0383254328', 'DA010082', '042193009252', '1686157200', '8&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('70', '0379267778', 'DA010092', '042195000322', '1686157200', '3&#x002F;25&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('71', '0379957174', 'DA008882', '042196004887', '1664902800', '11&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('72', '0943666429', 'DA009129', '042197001608', '1709571600', '4&#x002F;25&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('73', '0962340545', 'DA010076', '163218565', '1686157200', '1&#x002F;28&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('74', '0965852138', 'DA000062', '183631607', '1578330000', '4&#x002F;9&#x002F;2013', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('75', '0962948488', 'DA002544', '183638858', '1677776400', '1&#x002F;20&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('76', '0989223224', 'DA001924', '183692695', '1648746000', '3&#x002F;29&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('77', '0977252616', 'DA002074', '183723930', '1682874000', '11&#x002F;12&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('78', '0986449099', 'DA000787', '183741965', '1602262800', '10&#x002F;11&#x002F;2006', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('79', '0373843592', 'DA002127', '183849101', '1667322000', '3&#x002F;20&#x002F;2008', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('80', '0976292306', 'DA003750', '183867959', '1675530000', '5&#x002F;15&#x002F;2008', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('81', '0969071569', 'DA001905', '183973745', '1648746000', '6&#x002F;26&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('82', '0949413111', 'DA000054', '183982323', '1578330000', '9&#x002F;4&#x002F;2009', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('83', '0392919825', 'DA000055', '183992289', '1578330000', '10&#x002F;5&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('84', '0988428864', 'DA000161', '183992298', '1578330000', '10&#x002F;14&#x002F;2009', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('85', '0345631731', 'DA001784', '184048799', '1617210000', '12&#x002F;19&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('86', '0946457866', 'DA006048', '184157375', '1660064400', '10&#x002F;26&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('87', '0972712494', 'DA006047', '187516237', '1660064400', '3&#x002F;17&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('88', '0986899609', 'DA009272', '040088002932', '1672938000', '4&#x002F;10&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('89', '0964078197', 'DA009296', '040090000915', '1659718800', '3&#x002F;25&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('90', '0979615488', 'DA009493', '040187006986', '1701795600', '4&#x002F;13&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('91', '0835507777', 'DA009494', '040190045536', '1701795600', '12&#x002F;20&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('92', '0983893330', 'DA009243', '042195001972', '1659718800', '4&#x002F;18&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('93', '0944953456', 'DA009299', '042196000251', '1664989200', '3&#x002F;24&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('94', '0943113116', 'DA003213', '067092000023', '1628096400', '10&#x002F;12&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('95', '0989266693', 'DA009361', '173651702', '1699203600', '8&#x002F;1&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('96', '0943242292', 'DA004978', '183866319', '1609952400', '3&#x002F;2&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('97', '0972858836', 'DA009492', '183992258', '1701795600', '10&#x002F;13&#x002F;2009', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('98', '0988018200', 'DA009126', '184024483', '1709571600', '11&#x002F;1&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('99', '0979496316', 'DA008971', '042094016640', '1688490000', '11&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('100', '0966138996', 'DA008635', '042096006683', '1675443600', '9&#x002F;1&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('101', '0942664528', 'DA005240', '042096014554', '1686070800', '5&#x002F;10&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('102', '0853488999', 'DA009617', '042097007922', '1688662800', '8&#x002F;10&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('103', '0348772763', 'DA008939', '042195004189', '1685898000', '8&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('104', '0964457273', 'DA005154', '042197012129', '1665075600', '7&#x002F;31&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('105', '0368936712', 'DA009773', '042198010665', '1709744400', '1&#x002F;7&#x002F;2022', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('106', '0814986268', 'DA006477', '183772277', '1618074000', '1&#x002F;8&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('107', '0976729246', 'DA000716', '184028565', '1599670800', '4&#x002F;7&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('108', '0983089522', 'DA000718', '184064255', '1599670800', '9&#x002F;16&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('109', '0888622826', 'DSA52132', '184156959', '1606928400', '10&#x002F;5&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('110', '0826181567', 'DA006110', '184213779', '1675962000', '9&#x002F;10&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('111', '0329909976', 'DA004990', '184220767', '1630947600', '12&#x002F;20&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('112', '0358343431', 'DA004944', '184256163', '1628269200', '7&#x002F;4&#x002F;2013', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('113', '0975415697', 'DA004988', '184280888', '1630947600', '3&#x002F;28&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('114', '0963419751', 'DA003759', '184303334', '1675530000', '7&#x002F;1&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('115', '0972721735', 'DA007260', '184318281', '1686416400', '2&#x002F;11&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('116', '0987126846', 'DA005155', '184336575', '1665075600', '8&#x002F;11&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('117', '0336478585', 'DA004942', '184340781', '1628269200', '1&#x002F;6&#x002F;2016', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('118', '0898638345', 'DA001635', '040093006660', '1618160400', '7&#x002F;23&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('119', '0363149666', 'DA009305', '040095026435', '1678035600', '8&#x002F;27&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('120', '0971457626', 'DA009140', '040187026486', '1717520400', '10&#x002F;2&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('121', '0912971249', 'DSA37478', '040188003040', '1565283600', '5&#x002F;14&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('122', '0374028654', 'DSA37397', '040191024532', '1528131600', '3&#x002F;19&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('123', '0984250919', 'DA008976', '040192006461', '1688490000', '4&#x002F;22&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('124', '0852336519', 'DA009127', '040197028104', '1709571600', '8&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('125', '0986868715', 'DA000363', '186315239', '1636390800', '4&#x002F;26&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('126', '0902278708', 'DSA37461', '186386620', '1530810000', '6&#x002F;11&#x002F;2004', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('127', '0974061986', 'DA001409', '186428327', '1631293200', '9&#x002F;12&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('128', '0384357350', 'DSA37578', '186606339', '1593795600', '6&#x002F;16&#x002F;2005', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('129', '0973908777', 'DA005992', '186888228', '1654794000', '10&#x002F;1&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('130', '0986918146', 'DA001346', '186923753', '1623344400', '4&#x002F;19&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('131', '0979534823', 'DA000460', '186984660', '1649437200', '7&#x002F;16&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('132', '0382749766', 'DA003537', '187013552', '1659632400', '10&#x002F;9&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('133', '0915235777', 'DA009584', '187034329', '1675702800', '9&#x002F;9&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('134', '0963017918', 'DA009323', '187077502', '1680714000', '12&#x002F;12&#x002F;2008', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('135', '0971349398', 'DA001136', '187367473', '1660064400', '5&#x002F;12&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('136', '0886728673', 'DA009307', '187601498', '1683306000', '4&#x002F;12&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('137', '0339087232', 'DA005422', '040091034192', '1657213200', '5&#x002F;10&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('138', '0387245557', 'DA008297', '040094017638', '1659459600', '7&#x002F;6&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('139', '0967378799', 'DA009030', '040187005583', '1699117200', '4&#x002F;7&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('140', '0356259412', 'DA005130', '040190026242', '1659805200', '10&#x002F;10&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('141', '0981526066', 'DA008123', '040197019039', '1680368400', '9&#x002F;19&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('142', '0763180458', 'DA008422', '042096000374', '1693674000', '3&#x002F;31&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('143', '0359006901', 'DA009029', '042099000888', '1699117200', '4&#x002F;22&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('144', '0969072519', 'DA004496', '073382090', '1662397200', '6&#x002F;6&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('145', '0779112698', 'DA001592', '087184013736', '1602435600', '8&#x002F;3&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('146', '0827805896', 'DA003461', '183512987', '1654362000', '1&#x002F;16&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('147', '0968985986', 'DA001760', '186645342', '1654966800', '10&#x002F;4&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('148', '0888047899', 'DA003152', '186821265', '1622826000', '12&#x002F;21&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('149', '0975331037', 'DA008977', '187029120', '1688490000', '7&#x002F;2&#x002F;2008', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('150', '0845172333', 'DA002867', '187164669', '1659546000', '8&#x002F;8&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('151', '0973575474', 'DA007566', '187222612', '1668186000', '12&#x002F;11&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('152', '0942123187', 'DA005026', '187323055', '1641488400', '1&#x002F;6&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('153', '0983345494', 'DSA37577', '187346039', '1643821200', '8&#x002F;17&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('154', '0981563699', 'DA005013', '187756429', '1638810000', '2&#x002F;13&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('155', '0387937364', 'DA003215', '215421004', '1628096400', '10&#x002F;13&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('156', '0942159494', 'DA009053', '031194017226', '1701709200', '9&#x002F;3&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('157', '0984986509', 'DA009552', '040085019529', '1667754000', '8&#x002F;11&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('158', '0372499986', 'DA010073', '040094001317', '1688749200', '5&#x002F;2&#x002F;2022', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('159', '0346325911', 'DA001921', '040095016831', '1648746000', '7&#x002F;7&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('160', '0962169597', 'DA009530', '040191003738', '1714928400', '4&#x002F;10&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('161', '0366038248', 'DA005416', '040193004465', '1657213200', '4&#x002F;22&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('162', '0369883321', 'DA010111', '040198028461', '1662570000', '12&#x002F;20&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('163', '0333967898', 'DA008630', '186182269', '1675443600', '12&#x002F;24&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('164', '0393530789', 'DA008696', '186241503', '1688403600', '10&#x002F;30&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('165', '0989456030', 'DA001714', '186322153', '1644598800', '3&#x002F;13&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('166', '0858919991', 'DA008697', '187084307', '1688403600', '7&#x002F;9&#x002F;2013', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('167', '0947310558', 'DA001378', '187178636', '1625936400', '11&#x002F;23&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('168', '0348251428', 'DA010113', '187456303', '1686157200', '12&#x002F;1&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('169', '0969567395', 'DSA37574', '187489648', '1588438800', '10&#x002F;28&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('170', '0967000897', 'DA008698', '187587551', '1688403600', '6&#x002F;16&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('171', '0971835598', 'DA008299', '187756340', '1659459600', '11&#x002F;17&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('172', '0332722877', 'DA007755', '187773549', '1656608400', '8&#x002F;5&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('173', '0966240420', 'DA005967', '187871144', '1639069200', '10&#x002F;7&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('174', '0377638826', 'DA008298', '187953253', '1659459600', '5&#x002F;20&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('175', '0969955588', 'DA005854', '001086022400', '1617987600', '6&#x002F;17&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('176', '0856785569', 'DA008489', '011096000167', '1714669200', '4&#x002F;4&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('177', '0965878565', 'DA003627', '033192002179', '1670173200', '6&#x002F;27&#x002F;2018', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('178', '0862115286', 'DA009592', '034201012212', '1667754000', '11&#x002F;25&#x002F;2019', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('179', '0919592326', 'DSA98096', '036091005275', '1591549200', '8&#x002F;23&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('180', '0973861105', 'DA006050', '036093015880', '1660064400', '5&#x002F;8&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('181', '0359726052', 'DA009939', '036095012147', '1696698000', '6&#x002F;17&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('182', '0394023178', 'DA009593', '036186002406', '1667754000', '8&#x002F;1&#x002F;2016', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('183', '0964442889', 'DA005721', '036188012601', '1659978000', '4&#x002F;25&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('184', '0366669764', 'DA009782', '036190020252', '1709744400', '7&#x002F;2&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('185', '0984800501', 'DA007662', '038189030768', '1686502800', '9&#x002F;24&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('186', '0373526438', 'DA007176', '045195124', '1683738000', '1&#x002F;3&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('187', '0943699779', 'DA001891', '079197000014', '1640970000', '4&#x002F;6&#x002F;2016', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('188', '0973375798', 'DA002990', '163139946', '1609779600', '11&#x002F;1&#x002F;2008', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('189', '0981796187', 'DA005330', '163285444', '1636304400', '6&#x002F;2&#x002F;2011', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('190', '0949593898', 'DA001264', '163343726', '1602349200', '9&#x002F;20&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('191', '0387675456', 'DA003070', '184312373', '1683133200', '12&#x002F;9&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('192', '0949689895', 'DA002039', '187386028', '1675184400', '5&#x002F;18&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('193', '0372271392', 'DA005331', '034095005558', '1636304400', '10&#x002F;5&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('194', '0838920287', 'DA007703', '036087014725', '1651338000', '4&#x002F;17&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('195', '0399515133', 'DA001322', '036088011272', '1620666000', '7&#x002F;16&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('196', '0964732659', 'DSA98109', '036090003640', '1601744400', '11&#x002F;4&#x002F;2016', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('197', '0966194632', 'DA000878', '036091000669', '1612890000', '10&#x002F;9&#x002F;2015', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('198', '0353640127', 'DA008694', '036091010733', '1688403600', '2&#x002F;21&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('199', '0968686161', 'DA002406', '036092007565', '1656781200', '1&#x002F;3&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('200', '0949412695', 'DA005507', '036095002419', '1673110800', '8&#x002F;17&#x002F;2020', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('201', '0866690001', 'DA008465', '036098008942', '1701536400', '10&#x002F;30&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('202', '0982786581', 'DA000909', '036191003547', '1620579600', '8&#x002F;24&#x002F;2017', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('203', '0945170087', 'DA009302', '036192005065', '1662397200', '7&#x002F;2&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('204', '0582005926', 'DA006182', '036195010601', '1610298000', '8&#x002F;16&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('205', '0774359940', 'DA009544', '036200013459', '1670346000', '6&#x002F;28&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('206', '0528128581', 'DA009488', '036303009355', '1654534800', '4&#x002F;25&#x002F;2021', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('207', '0372006134', 'DA005305', '038193002138', '1633626000', '11&#x002F;10&#x002F;2016', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('208', '0948788916', 'DSA98118', '162483452', '1554570000', '2&#x002F;14&#x002F;2012', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('209', '0941638588', 'DA000760', '163225096', '1599670800', '2&#x002F;28&#x002F;2010', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_info (userid, phone, code, bank_card, start_working, date_cmnd, cmnd) VALUES('210', '0842991234', 'DA009311', '163242374', '1662397200', '3&#x002F;11&#x002F;2014', '')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}

try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('1', 'Bạn thích môn thể thao nào nhất', 'vi', '1', '1274840238', '1274840238')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('2', 'Món ăn mà bạn yêu thích', 'vi', '2', '1274840250', '1274840250')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('3', 'Thần tượng điện ảnh của bạn', 'vi', '3', '1274840257', '1274840257')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('4', 'Bạn thích nhạc sỹ nào nhất', 'vi', '4', '1274840264', '1274840264')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('5', 'Quê ngoại của bạn ở đâu', 'vi', '5', '1274840270', '1274840270')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('6', 'Tên cuốn sách &quot;gối đầu giường&quot;', 'vi', '6', '1274840278', '1274840278')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
try {
    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_question (qid, title, lang, weight, add_time, edit_time) VALUES('7', 'Ngày lễ mà bạn luôn mong đợi', 'vi', '7', '1274840285', '1274840285')");
} catch (PDOException $e) {
    trigger_error($e->getMessage());
}
