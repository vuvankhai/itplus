<?php 
class ReportController extends Controller{
    
    public function actionExcel(){
    $objPHPExcel = new PHPExcel();
    
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Hello')
    ->setCellValue('B2', 'world!')
    ->setCellValue('C1', 'Hello')
    ->setCellValue('D2', 'world!');

    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A4', 'Miscellaneous glyphs')
    ->setCellValue('A5', 'eaeuaeioueiuyaouc');
 
    $objPHPExcel->getActiveSheet()->setTitle('Simple');
 
    $objPHPExcel->setActiveSheetIndex(0);
    
    $date = date('Ymd-His');
    $filename = "report-".$date."xls";
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename='.$filename);
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
  }
}
?>
