<?php

/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;

function export_dailyreport()
{

    global $module_name, $lang_module;
    $objPHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load(NV_ROOTDIR . '/modules/report/dailyreport.xlsx');
    $objWorksheet = $objPHPExcel->getActiveSheet();

    // Begin Set page orientation and size
    $objWorksheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    $objWorksheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);
    $objWorksheet->getPageSetup()->setHorizontalCentered(true);
    $table_head = [
        'font' => [
            'color' => [
                'rgb' => 'FFFFFF',
            ],
            'bold' => true,
            'size' => 12,
        ],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => [
                'rgb' => '538ED5',
            ],
        ],
    ];
    $left_label = array(
        'font' => array(
            'color' => array(
                'argb' => Color::COLOR_RED,
            ),
            'bold' => true,
        ),
        'borders' => array(
            'outline' => array(
                'borderStyle' => Border::BORDER_THIN,
                'color' => array(
                    'argb' => '00000000',
                ),
            ),
        ),
    );
    $borderStyle = array(
        'borders' => array(
            'outline' => array(
                'borderStyle' => Border::BORDER_THIN,
                'color' => array(
                    'argb' => '00000000',
                ),
            ),
        ),
        'allborders' => array(
            'borderStyle' => Border::BORDER_THIN,
        ),
    );

    $file_folder_path = NV_ROOTDIR . "/" . NV_TEMP_DIR . "/" . $module_name . "/";
    // if (file_exists($file_folder_path)) {
    //     $check = nv_deletefile($file_folder_path, true);
    //     if ($check[0] != 1) {
    //         $error = $check[1];
    //     }
    // }
    // if (empty($error)) {
    //     $check = nv_mkdir(NV_ROOTDIR . '/' . NV_TEMP_DIR, $module_name);
    //     if ($check[0] != 1) {
    //         $error = $check[1];
    //     }
    // }

    // Kiểm tra tồn tại của file tạm
    if (!file_exists($file_folder_path)) {
        echo $file_folder_path;
        die();
        $error = $lang_module['export_error_fileexists'];
    }
    $file_export = $file_folder_path . 'dailyreport.xlsx';

    $objWorksheet->setCellValue('A1', "Room");
    $objWorksheet->setCellValue('B1', "Time");
    $objWorksheet->getStyle('A1:B1')->applyFromArray($table_head);

    $c = 2;
    $r = 1;

    // fill label
    // foreach ($DateArray as $key => $day) {
    //     $c++;
    //     $objWorksheet->setCellValueByColumnAndRow($c, $r, nv_date('d-M', $day));
    //     $objWorksheet->getStyle(col_name($c) . $r)->applyFromArray($table_head);
    //     $objWorksheet->getStyleByColumnAndRow($c, $r)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    //     $objWorksheet->getStyleByColumnAndRow($c, $r)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    //     $objWorksheet->getColumnDimensionByColumn($c)->setAutoSize(true);
    // }

    // $c = 2;
    // $r = 0;

    // foreach ($room_booking as $roomid => $arr_bookingDate) { // duyệt từng phòng
    //     $c = 2;
    //     $r += 2;
    //     $objWorksheet->mergeCells('A' . $r . ':A' . ($r + 1));
    //     $objWorksheet->setCellValue('A' . $r, "[" . $room_array[$roomid]['type'] . "] \n" . $room_array[$roomid]['name']);
    //     $objWorksheet->setCellValue('B' . $r, 'Morning');
    //     $objWorksheet->setCellValue('B' . ($r + 1), 'Afternoon');
    //     $objWorksheet->getStyle('A' . $r . ':B' . ($r + 1))->applyFromArray($left_label);
    //     foreach ($DateArray as $key => $day) { // duyệt từng ngày
    //         $c++;
    //         $date = nv_date('j', $day);
    //         $count1 = 0;
    //         $count2 = 0;
    //         $morning = '';
    //         $afternoon = '';
    //         if (!empty($arr_bookingDate[$date])) {
    //             // echo displayArray($arr_bookingDate[$date]); exit();
    //             foreach ($arr_bookingDate[$date] as $booking) {
    //                 $booking_content = $booking['booking_content'];
    //                 $booking_content .= ' (' . $booking['usergroup'] . ' - ' . $booking['username'] . ') ';
    //                 if ($booking['time'] == 1) {
    //                     $morning .= $count1 >= 1 ? "\n" . "-------------------" . "\n" : '';
    //                     $morning .= $booking_content;
    //                     $count1++;
    //                 } else {
    //                     $afternoon .= $count2 >= 1 ? "\n" . "-------------------" . "\n" : '';
    //                     $afternoon .= $booking_content;
    //                     $count2++;
    //                 }
    //             }
    //         }
    //         $objWorksheet->getStyle(col_name($c) . $r . ':' . col_name($c) . ($r + 1))->applyFromArray($borderStyle);
    //         /*
    //          * $objWorksheet->getStyle(col_name($c) . $r . ':' . col_name($c) . ($r+1))->getBorders()
    //          * ->getAllBorders()
    //          * ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    //          */
    //         $objWorksheet->setCellValueByColumnAndRow($c, $r, $morning);
    //         $objWorksheet->setCellValueByColumnAndRow($c, ($r + 1), $afternoon);
    //     }
    // }

    $objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');
    $objWriter->save($file_export);

    // Download file
    $download = new NukeViet\Files\Download($file_export, NV_ROOTDIR . "/" . NV_TEMP_DIR, "dailyreport2.xlsx");
    $download->download_file();
    exit();
}
