<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Tuấn Phạm <tuanpb1988@gmail.com>
 * @Copyright (C) 2023 Tuấn Phạm. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 15 Feb 2023 15:38:52 GMT
 */

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_row";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_row (
  id tinyint(11) NOT NULL AUTO_INCREMENT,
  customer varchar(50)  CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT 'Tên khách hàng',
  status tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Trạng thái',
  note text NOT NULL DEFAULT '' COMMENT 'Ghi chú',
  ext_app_id varchar(30) NOT NULL DEFAULT '' COMMENT 'Số hợp đồng',
  c_scheme varchar(50) NOT NULL DEFAULT '' COMMENT 'Tên sản phẩm',
  dpd int(11) NOT NULL DEFAULT 0 COMMENT 'Số ngày chậm nợ',
  allocationdate int(11) NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày đổ list',
  installment_amt double NOT NULL DEFAULT 0 COMMENT 'Số tiền trả góp mỗi kỳ',
  sale_code varchar(20) NOT NULL DEFAULT '' COMMENT 'Sale',
  sale_email varchar(30) NOT NULL DEFAULT '' COMMENT 'Email sale',
  PRIMARY KEY (id)
) ENGINE=MyISAM;";
