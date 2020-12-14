<?php
include_once('db_connect.php'); 
include('xl_library/PHPExcel.php');
 
    $objPHPExcel    =   new PHPExcel();
    $sql = "SELECT us.id, us.name , vs.visits,vs.status
	FROM users us join visits vs on vs.id = us.id ORDER BY us.id asc";

    $result = mysqli_query($conn, $sql);;
 
$objPHPExcel->setActiveSheetIndex(0);
 
//$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Id');
//$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Name');

//$objPHPExcel->getActiveSheet()->getStyle("A1:C1")->getFont(10)->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle("B1:C1")->getFont(10)->setBold(true);
$rowCount   =   2;
while($row  = mysqli_fetch_object($result)){
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$row->id);
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row->name);
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row->visits);
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row->status);
    $rowCount++;
}

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);

$objPHPExcel->getActiveSheet()->SetCellValue('A1',Id);
$objPHPExcel->getActiveSheet()->SetCellValue('B1',Name);
$objPHPExcel->getActiveSheet()->SetCellValue('C1',Visits);
$objPHPExcel->getActiveSheet()->SetCellValue('D1',Status);

$objPHPExcel->getActiveSheet()->mergeCells('A1:A1');

$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray(
        array(
            'font'=>array(
                'bold'=>true,
            ),
            'borders'=>array(
                'allborders'=>array(
                    'style'=> PHPExcel_Style_Border::BORDER_THIN
                )
            )
        )
        );



$objWriter  =   new PHPExcel_Writer_Excel2007($objPHPExcel);
 
 
header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="user.xlsx"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
$objWriter->save('php://output');
self.close();
?>