<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2022 VINADES.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Sun, 25 Sep 2022 20:47:04 GMT
 */

if (!defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_backupcodes";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_config";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_edit";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_field";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_groups";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_groups_detail";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_groups_users";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_info";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_openid";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_question";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_reg";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "(
  userid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  group_id smallint(5) unsigned NOT NULL DEFAULT 0,
  username varchar(100) NOT NULL DEFAULT '',
  md5username char(32) NOT NULL DEFAULT '',
  password varchar(150) NOT NULL DEFAULT '',
  email varchar(100) NOT NULL DEFAULT '',
  first_name varchar(100) NOT NULL DEFAULT '',
  last_name varchar(100) NOT NULL DEFAULT '',
  gender char(1) DEFAULT '',
  photo varchar(255) DEFAULT '',
  birthday int(11) NOT NULL,
  sig text DEFAULT NULL,
  regdate int(11) NOT NULL DEFAULT 0,
  question varchar(255) NOT NULL,
  answer varchar(255) NOT NULL DEFAULT '',
  passlostkey varchar(50) DEFAULT '',
  view_mail tinyint(1) unsigned NOT NULL DEFAULT 0,
  remember tinyint(1) unsigned NOT NULL DEFAULT 0,
  in_groups varchar(255) DEFAULT '',
  active tinyint(1) unsigned NOT NULL DEFAULT 0,
  active2step tinyint(1) unsigned NOT NULL DEFAULT 0,
  secretkey varchar(20) DEFAULT '',
  checknum varchar(40) DEFAULT '',
  last_login int(11) unsigned NOT NULL DEFAULT 0,
  last_ip varchar(45) DEFAULT '',
  last_agent varchar(255) DEFAULT '',
  last_openid varchar(255) DEFAULT '',
  last_update int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời điểm cập nhật thông tin lần cuối',
  idsite int(11) NOT NULL DEFAULT 0,
  safemode tinyint(1) unsigned NOT NULL DEFAULT 0,
  safekey varchar(40) DEFAULT '',
  email_verification_time int(11) NOT NULL DEFAULT -1 COMMENT '-3: Tài khoản sys, -2: Admin kích hoạt, -1 không cần kích hoạt, 0: Chưa xác minh, > 0 thời gian xác minh',
  active_obj varchar(50) NOT NULL DEFAULT 'SYSTEM' COMMENT 'SYSTEM, EMAIL, OAUTH:xxxx, quản trị kích hoạt thì lưu userid',
  PRIMARY KEY (userid),
  UNIQUE KEY username (username),
  UNIQUE KEY md5username (md5username),
  UNIQUE KEY email (email),
  KEY idsite (idsite)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_backupcodes(
  userid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  code varchar(20) NOT NULL,
  is_used tinyint(1) unsigned NOT NULL DEFAULT 0,
  time_used int(11) unsigned NOT NULL DEFAULT 0,
  time_creat int(11) unsigned NOT NULL DEFAULT 0,
  UNIQUE KEY userid (userid,code)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_config(
  config varchar(100) NOT NULL,
  content text DEFAULT NULL,
  edit_time int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (config)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_edit(
  userid mediumint(8) unsigned NOT NULL,
  lastedit int(11) unsigned NOT NULL DEFAULT 0,
  info_basic text NOT NULL,
  info_custom text NOT NULL,
  PRIMARY KEY (userid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_field(
  fid mediumint(8) NOT NULL AUTO_INCREMENT,
  field varchar(25) NOT NULL,
  weight int(10) unsigned NOT NULL DEFAULT 1,
  field_type enum('number','date','textbox','textarea','editor','select','radio','checkbox','multiselect') NOT NULL DEFAULT 'textbox',
  field_choices text NOT NULL,
  sql_choices text NOT NULL,
  match_type enum('none','alphanumeric','unicodename','email','url','regex','callback') NOT NULL DEFAULT 'none',
  match_regex varchar(250) NOT NULL DEFAULT '',
  func_callback varchar(75) NOT NULL DEFAULT '',
  min_length int(11) NOT NULL DEFAULT 0,
  max_length bigint(20) unsigned NOT NULL DEFAULT 0,
  required tinyint(3) unsigned NOT NULL DEFAULT 0,
  show_register tinyint(3) unsigned NOT NULL DEFAULT 0,
  user_editable tinyint(3) unsigned NOT NULL DEFAULT 0,
  show_profile tinyint(4) NOT NULL DEFAULT 1,
  class varchar(50) NOT NULL,
  language text NOT NULL,
  default_value varchar(255) NOT NULL DEFAULT '',
  is_system tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (fid),
  UNIQUE KEY field (field)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_groups(
  group_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  alias varchar(240) NOT NULL,
  email varchar(100) DEFAULT '',
  group_type tinyint(4) unsigned NOT NULL DEFAULT 0 COMMENT '0:Sys, 1:approval, 2:public',
  group_color varchar(10) NOT NULL,
  group_avatar varchar(255) NOT NULL,
  require_2step_admin tinyint(1) unsigned NOT NULL DEFAULT 0,
  require_2step_site tinyint(1) unsigned NOT NULL DEFAULT 0,
  is_default tinyint(1) unsigned NOT NULL DEFAULT 0,
  add_time int(11) NOT NULL,
  exp_time int(11) NOT NULL,
  weight int(11) unsigned NOT NULL DEFAULT 0,
  act tinyint(1) unsigned NOT NULL,
  idsite int(11) unsigned NOT NULL DEFAULT 0,
  numbers mediumint(9) unsigned NOT NULL DEFAULT 0,
  siteus tinyint(4) unsigned NOT NULL DEFAULT 0,
  config varchar(250) DEFAULT '',
  is_system tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Là nhóm hệ thống',
  PRIMARY KEY (group_id),
  UNIQUE KEY kalias (alias,idsite),
  KEY exp_time (exp_time)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_groups_detail(
  group_id smallint(5) unsigned NOT NULL DEFAULT 0,
  lang char(2) NOT NULL DEFAULT '',
  title varchar(240) NOT NULL,
  description varchar(240) NOT NULL DEFAULT '',
  content text DEFAULT NULL,
  UNIQUE KEY group_id_lang (lang,group_id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_groups_users(
  group_id smallint(5) unsigned NOT NULL DEFAULT 0,
  userid mediumint(8) unsigned NOT NULL DEFAULT 0,
  is_leader tinyint(1) unsigned NOT NULL DEFAULT 0,
  approved tinyint(1) unsigned NOT NULL DEFAULT 0,
  data text NOT NULL,
  time_requested int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian yêu cầu tham gia',
  time_approved int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'Thời gian duyệt yêu cầu tham gia',
  PRIMARY KEY (group_id,userid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_info(
  userid mediumint(8) unsigned NOT NULL,
  phone varchar(255) NOT NULL DEFAULT '' COMMENT 'Điện thoại',
  code varchar(255) NOT NULL DEFAULT '' COMMENT 'Mã nhân viên',
  bank_card varchar(255) NOT NULL DEFAULT '' COMMENT 'Tài khoản ngân hàng',
  start_working double NOT NULL DEFAULT 0 COMMENT 'Ngày chính thức làm việc',
  date_cmnd varchar(255) NOT NULL DEFAULT '' COMMENT 'Ngày cấp CMND/CCCD',
  cmnd varchar(255) NOT NULL DEFAULT '' COMMENT 'Số CMND/CCCD',
  PRIMARY KEY (userid)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_openid(
  userid mediumint(8) unsigned NOT NULL DEFAULT 0,
  openid char(50) NOT NULL DEFAULT '',
  opid char(50) NOT NULL DEFAULT '',
  id char(50) NOT NULL DEFAULT '',
  email varchar(100) NOT NULL DEFAULT '',
  UNIQUE KEY opid (openid,opid),
  KEY userid (userid),
  KEY email (email)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_question(
  qid smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(240) NOT NULL DEFAULT '',
  lang char(2) NOT NULL DEFAULT '',
  weight mediumint(8) unsigned NOT NULL DEFAULT 0,
  add_time int(11) unsigned NOT NULL DEFAULT 0,
  edit_time int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (qid),
  UNIQUE KEY title (title,lang)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_reg(
  userid mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(100) NOT NULL DEFAULT '',
  md5username char(32) NOT NULL DEFAULT '',
  password varchar(150) NOT NULL DEFAULT '',
  email varchar(100) NOT NULL DEFAULT '',
  first_name varchar(255) NOT NULL DEFAULT '',
  last_name varchar(255) NOT NULL DEFAULT '',
  gender char(1) NOT NULL DEFAULT '',
  birthday int(11) NOT NULL,
  sig text DEFAULT NULL,
  regdate int(11) unsigned NOT NULL DEFAULT 0,
  question varchar(255) NOT NULL,
  answer varchar(255) NOT NULL DEFAULT '',
  checknum varchar(50) NOT NULL DEFAULT '',
  users_info text DEFAULT NULL,
  openid_info text DEFAULT NULL,
  idsite mediumint(8) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (userid),
  UNIQUE KEY login (username),
  UNIQUE KEY md5username (md5username),
  UNIQUE KEY email (email)
) ENGINE=MyISAM";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('access_admin', 'a:8:{s:15:\"access_viewlist\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_addus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:14:\"access_waiting\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:17:\"access_editcensor\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_editus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:12:\"access_delus\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}s:13:\"access_passus\";a:2:{i:1;b:1;i:2;b:1;}s:13:\"access_groups\";a:3:{i:1;b:1;i:2;b:1;i:3;b:1;}}', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('password_simple', '000000|1234|2000|12345|111111|123123|123456|654321|696969|1234567|1234569|11223344|12345678|12345679|23456789|66666666|66668888|68686868|87654321|88888888|99999999|123456789|999999999|1234567890|aaaaaa|abc123|abc123@|abc@123|admin123|admin123@|admin@123|adobe1|adobe123|azerty|baseball|dragon|football|harley|hoilamgi|iloveyou|jennifer|jordan|khongbiet|khongco|khongcopass|letmein|macromedia|master|michael|monkey|mustang|nuke123|nuke123@|nuke@123|password|photoshop|pussy|qwerty|shadow|superman', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('deny_email', 'yoursite.com|mysite.com|localhost|xxx', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('deny_name', 'anonimo|anonymous|god|linux|nobody|operator|root', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('avatar_width', '80', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('avatar_height', '80', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('active_group_newusers', '1', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('active_editinfo_censor', '1', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('active_user_logs', '1', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('min_old_user', '16', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('register_active_time', '86400', '1662650678')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('auto_assign_oauthuser', '0', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('admin_email', '0', '1663731752')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $module_data . "_config (config, content, edit_time) VALUES('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br /> <br /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br /> <br /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br /> <br /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', '1274757129')";
