<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.com)
 * @Copyright (C) 2014 mynukeviet. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 13-08-2017 15:49
 */
if (!defined('NV_ADMIN')) {
    die('Stop!!!');
}

$allow_func[] = 'import';
$submenu['import'] = $lang_module['import'];

/**
 * nv_users_download()
 *
 * @param mixed $array_data
 * @param mixed $type
 * @return
 *
 */
function nv_users_download($array_data, $type = 'xlsx')
{
    global $module_name, $module_file, $admin_info, $lang_module;

    if (empty($array_data)) {
        die('Nothing download!');
    }

    $array = array(
        'objType' => '',
        'objExt' => ''
    );
    switch ($type) {
        case 'xlsx':
            $array['objType'] = 'Excel2007';
            $array['objExt'] = 'xlsx';
            break;
        case 'xls':
            $array['objType'] = 'Excel5';
            $array['objExt'] = 'xls';
            break;
        case 'ods':
            $array['objType'] = 'OpenDocument';
            $array['objExt'] = 'ods';
            break;
        default:
            $array['objType'] = 'CSV';
            $array['objExt'] = 'csv';
    }

    $array_fields = array(
        'number',
        'fullname',
        'score',
        'timer',
        'rating',
        'count_true',
        'count_false',
        'count_skeep'
    );

    $objPHPExcel = PHPExcel_IOFactory::load(NV_ROOTDIR . '/modules/' . $module_file . '/template/users_list.xls');
    $objPHPExcel->setActiveSheetIndex(0);

    // Set properties
    $objPHPExcel->getProperties()
        ->setCreator($admin_info['username'])
        ->setLastModifiedBy($admin_info['username'])
        ->setTitle($lang_module['users_list'])
        ->setSubject($lang_module['users_list'])
        ->setDescription($lang_module['users_list'])
        ->setCategory($module_name);

    $columnIndex = 0; // Cot bat dau ghi du lieu
    $rowIndex = 4; // Dong bat dau ghi du lieu

    $i = $rowIndex;
    $j = $columnIndex;
    foreach ($array_data as $field => $data) {
        $col = PHPExcel_Cell::stringFromColumnIndex($j);
        $CellValue = $data['text'];
        $objPHPExcel->getActiveSheet()->setCellValue($col . $i, $CellValue);
        $objPHPExcel->getActiveSheet()
            ->getColumnDimension($col)
            ->setAutoSize(true);
        $j++;
    }

    $highestRow = $i;
    $highestColumn = PHPExcel_Cell::stringFromColumnIndex($j - 1);

    $objPHPExcel->getActiveSheet()->mergeCells('A2:' . $highestColumn . '2');
    $objPHPExcel->getActiveSheet()->setCellValue('A2', mb_strtoupper($lang_module['users_list']));

    $styleArray = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
        )
    );
    $objPHPExcel->getActiveSheet()
        ->getStyle('A2:' . $highestColumn . '2')
        ->applyFromArray($styleArray);

    // Set color
    $styleArray = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array(
                    'argb' => 'FF000000'
                )
            )
        )
    );

    $objPHPExcel->getActiveSheet()
        ->getStyle('A' . $rowIndex . ':' . $highestColumn . $highestRow)
        ->applyFromArray($styleArray);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $array['objType']);
    $file_src = NV_ROOTDIR . NV_BASE_SITEURL . NV_TEMP_DIR . '/' . change_alias($lang_module['users_list']) . '.' . $array['objExt'];
    $objWriter->save($file_src);

    $download = new NukeViet\Files\Download($file_src, NV_ROOTDIR . NV_BASE_SITEURL . NV_TEMP_DIR);
    $download->download_file();
    die();
}

function nv_replate_null($a)
{
    return $a != NULL ? $a : '';
}
