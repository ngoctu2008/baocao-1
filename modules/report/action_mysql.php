<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2022 VINADES.,JSC. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 22 Sep 2022 04:11:33 GMT
 */

if (!defined('NV_IS_FILE_MODULES')) {
    die('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_actions";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_actions(
  id int(11) NOT NULL AUTO_INCREMENT,
  date int(11) NOT NULL DEFAULT current_timestamp() COMMENT 'Note for date',
  code varchar(20) NOT NULL DEFAULT '' COMMENT 'Note for sale code',
  note text NOT NULL DEFAULT '' COMMENT 'Note',
  creat_by int(11) NOT NULL DEFAULT 0 COMMENT 'Tạo bởi userid',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rows(
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  date int(11) unsigned DEFAULT current_timestamp() COMMENT 'Ngày',
  code varchar(11) NOT NULL DEFAULT '' COMMENT 'Mã nhân viên',
  pl_app int(11) NOT NULL DEFAULT 0 COMMENT 'PL APP',
  pl_loan int(11) NOT NULL DEFAULT 0 COMMENT 'PL LOAN',
  dn_app int(11) NOT NULL DEFAULT 0 COMMENT 'Doanh nghiep APP',
  dn_loan int(11) NOT NULL DEFAULT 0 COMMENT 'Doanh nghiep LOAN',
  xstu_check int(11) NOT NULL DEFAULT 0 COMMENT 'XSTU check',
  xstu_app int(11) NOT NULL DEFAULT 0 COMMENT 'XSTU APP',
  xstu_loan int(11) NOT NULL DEFAULT 0 COMMENT 'XSTU LOAN',
  ipp_app int(11) NOT NULL DEFAULT 0 COMMENT 'IPP/GNN APP',
  ipp_loan int(11) NOT NULL DEFAULT 0 COMMENT 'IPP/GNN LOAN',
  banca_hd int(11) NOT NULL DEFAULT 0 COMMENT 'BANCA APP',
  banca_sale int(11) NOT NULL DEFAULT 0 COMMENT 'BANCA LOAN',
  ubank_app int(11) NOT NULL DEFAULT 0 COMMENT 'UBANK APP',
  ubank_loan int(11) NOT NULL DEFAULT 0 COMMENT 'UBANK LOAN',
  courier_lead int(11) NOT NULL DEFAULT 0 COMMENT 'Courier APP',
  courier_app int(11) NOT NULL DEFAULT 0 COMMENT 'Courier APP',
  courier_loan int(11) NOT NULL DEFAULT 0 COMMENT 'Courier LOAN',
  credit_app int(11) NOT NULL DEFAULT 0 COMMENT 'Credit Card APP',
  credit_loan int(11) NOT NULL DEFAULT 0 COMMENT 'Credit Card LOAN',
  PRIMARY KEY (id)
) ENGINE=MyISAM";
