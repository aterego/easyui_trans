<?php
/**
 * Developed by AVA - A.Avetisov.
 * Date: 20.09.2015
 * Time: 20:46
 */

include "conn.php";
require "Classes/PHPExcel.php";

$mask = '*.xls';
array_map('unlink', glob($mask));


$user_query = mysql_query('select * from persons');
// Write data to file
$flag = false;


$ea = new PHPExcel();



$ea->getProperties()
    ->setCreator('LRD')
    ->setTitle('LRD List')
    ->setLastModifiedBy('LRD')
    ->setDescription('LRD List')
    ->setSubject('PHP Excel manipulation')
    ->setKeywords('excel LRD List')
    ->setCategory('programming')
;


$ews = $ea->getSheet(0);
$ews->setTitle('Data');

$ews->setCellValue('a1', 'ინფორმაცია რეციპიენტზე'); // Sets cell 'a1' to value 'ID
$ews->setCellValue('q1', 'ინფორმაცია დონორზე');

$ea->getActiveSheet()->getStyle(a1)->getFont()->setBold(true);
$ea->getActiveSheet()->getStyle(q1)->getFont()->setBold(true);

$ews->setCellValue('a2', 'თარიღი');
$ews->setCellValue('b2', 'ვის მიერაა კანდიდატი შეყვანილი მოლოდინის სიაში');
$ews->setCellValue('c2', 'რეციპიენტის გვარი, სახელი');
$ews->setCellValue('d2', 'პირადი ნომერი');
$ews->setCellValue('e2', 'ასაკი');
$ews->setCellValue('f2', 'მისამართი');
$ews->setCellValue('g2', 'ტელეფონი');
$ews->setCellValue('h2', 'დიაგნოზი');
$ews->setCellValue('i2', 'სისხლის ჯგუფი და რეზუსი');
$ews->setCellValue('j2', 'ფიბროზის ხარისხი');
$ews->setCellValue('k2', 'Bilirubin (Total)');
$ews->setCellValue('l2', 'AST');
$ews->setCellValue('m2', 'ALT');
$ews->setCellValue('n2', 'GGT');
$ews->setCellValue('o2', 'Cr');
$ews->setCellValue('p2', 'INR');
$ews->setCellValue('q2', 'ალბუმინი');
$ews->setCellValue('r2', 'ასციტი');
$ews->setCellValue('s2', 'ენცეფალოპათია');
$ews->setCellValue('t2', 'სისხლდენა');
$ews->setCellValue('u2', 'CHILD');
$ews->setCellValue('v2', 'MELD');
$ews->setCellValue('w2', 'დამატებითი ინფორმაცია (მკურნალი ექიმის გვარი, ტელეფონი, სხვა ინფო)');
$ews->setCellValue('x2', 'დონორის გვარი, სახელი');
$ews->setCellValue('y2', 'პირადი ნომერი');
$ews->setCellValue('z2', 'ასაკი');
$ews->setCellValue('aa2', 'ნათესავური კავშირი');
$ews->setCellValue('ab2', 'მისამართი');
$ews->setCellValue('ac2', 'ტელეფონი');
$ews->setCellValue('ad2', 'სისხლის ჯგუფი და რეზუსი');
$ews->setCellValue('ae2', 'დამატებითი ინფორმაცია');

$ea->getActiveSheet()->getColumnDimension('a')->setWidth(10);
$ea->getActiveSheet()->getColumnDimension('b')->setWidth(30);
$ea->getActiveSheet()->getColumnDimension('c')->setWidth(30);
$ea->getActiveSheet()->getColumnDimension('d')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('e')->setWidth(5);
$ea->getActiveSheet()->getColumnDimension('f')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('g')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('h')->setWidth(30);
$ea->getActiveSheet()->getColumnDimension('i')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('j')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('k')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('l')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('m')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('n')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('o')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('p')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('q')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('r')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('s')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('t')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('u')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('v')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('w')->setWidth(35);
$ea->getActiveSheet()->getColumnDimension('x')->setWidth(30);
$ea->getActiveSheet()->getColumnDimension('y')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('z')->setWidth(5);
$ea->getActiveSheet()->getColumnDimension('aa')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('ab')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('ac')->setWidth(25);
$ea->getActiveSheet()->getColumnDimension('ad')->setWidth(15);
$ea->getActiveSheet()->getColumnDimension('ae')->setWidth(35);

$data = array();

$count = 0;
while ($row = mysql_fetch_array($user_query)) {

 $newArr = array();
 for($i=1; $i<32; $i++)
   array_push($newArr, $row[$i]);

  array_push($data, $newArr);


}




$ews->fromArray($data, ' ', 'A3');

$writer = PHPExcel_IOFactory::createWriter($ea, 'Excel5');

$writer->setIncludeCharts(true);
// We'll be outputting an excel file
//header('Content-type: application/vnd.ms-excel');

// It will be called file.xls
//header('Content-Disposition: attachment; filename="lrd.xls"');

$writer->save('lrd.xls');
/*
$root = "/crud2/";
header('Location: '.$root.'index.php?xls=1');
die();
*/

?>