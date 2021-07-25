<?php
session_start();
require('fpdf.php');
include("../Database/fetchData.php");
include("../Database/connection.php");

//Sql Querys
$userCode=$_SESSION['userCode'];
$fetchData=new fetchData();


//fetching personal Details
$rows = mysqli_fetch_assoc($fetchData->fecthDataFun($conn,'personalData',$userCode));
$code=$rows['userCode'];
$names=$rows['names'];
$id=$rows['id'];
$date=$rows['expire_date'];
$status=$rows['status'];

//fetching Condtions
$rowsCo = mysqli_fetch_assoc($fetchData->fecthDataFun($conn,'symptoms',$userCode));
$fisrtLine=$rowsCo['optOne'];
$secLine=$rowsCo['optTwo'];
$thirdLine=$rowsCo['optThree'];
$fourthLine=$rowsCo['optFour'];
$fifthLine=$rowsCo['optFive'];
$sixLine=$rowsCo['optSix'];
$sevenLine=$rowsCo['optSeven'];
$eightLine=$rowsCo['optEight'];
$nineLine=$rowsCo['optNine'];
$tenLine=$rowsCo['optTen'];

//fetching From cantact Table
$rowsRisk = mysqli_fetch_assoc($fetchData->fecthDataFun($conn,'contactrisk',$userCode));
$firstRisk=$rowsRisk['optOne'];
$secRisk=$rowsRisk['optSec'];

//Fetching From other Factors
$rowsRisk = mysqli_fetch_assoc($fetchData->fecthDataFun($conn,'otherfactors',$userCode));
$firstFac=$rowsRisk['optOne'];
$secFac=$rowsRisk['optSec'];

//Calling PDF Classes
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetFillColor(255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(.3);

$image1="download.jpg";
$pdf->Image($image1,92,4,20);
$pdf->SetXY(22,26);
$pdf->SetTextColor(0,0,0);
$pdf->Write(10,'Department of Health Covid19 24-Hour Hotline Number: 0800 029 999 and WhatsApp number: 0600 12 3456');


$pdf->SetFont('Arial','B',12);
$pdf->SetXY(42,40);
$pdf->SetTextColor(0,0,255);
$pdf->Write(10,'DAILY COVID-19 SYMPTOM SCREENING ASSESSMENT');



$pdf->SetXY(10,80);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(220);
$pdf->cell(190,8,"NAMES(s):".$names,1,0,'L',true);
$pdf->Ln();

$pdf->SetXY(10,90);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(220);
$pdf->cell(190,8,"ID/STUDENT/STAFF NO:".$id,1,0,'L',true);
$pdf->Ln();

$pdf->SetXY(10,100);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(220);
$pdf->cell(190,8,"STATUS:".$status,1,0,'L',true);
$pdf->Ln();

$pdf->SetXY(10,110);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(220);
$pdf->cell(190,8,"EXPIRY DATE:".$date,1,0,'L',true);
$pdf->Ln();

//Inserting Colums
$pdf->SetXY(10,150);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(220);
$pdf->cell(10,8,"No.",1,0,'L',true);
$pdf->cell(150,8,"CONDITION / SYMPTOM",1,0,'L',true);
$pdf->cell(30,8,"Response",1,0,'C',true);
$pdf->Ln();

$pdf->SetTextColor(0,0,255);
$pdf->SetFillColor(235);
$pdf->SetFont('','B',11);
$pdf->cell(10,8,"A.",1,0,'L',true);
$pdf->cell(150,8,"Symptom Check",1,0,'L',true);
$pdf->cell(30,8,"",1,0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255);
//Inserting First Row
$pdf->cell(10,8,"1",1,0,'L',true);
$pdf->cell(150,8,"Are you suffering from fever / high temperature or have temperature fluctuations?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($fisrtLine),1,0,'C',true);
$pdf->Ln();

//Sec row
$pdf->cell(10,8,"2",1,0,'L',true);
$pdf->cell(150,8,"Do you have a dry cough?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($secLine),1,0,'C',true);
$pdf->Ln();

//third_row
$pdf->cell(10,8,"3",1,0,'L',true);
$pdf->cell(150,8,"Do you have a sore throat?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($thirdLine),1,0,'C',true);
$pdf->Ln();

//fourth_row
$pdf->cell(10,8,"4",1,0,'L',true);
$pdf->cell(150,8,"Do you have redness of eyes?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($fourthLine),1,0,'C',true);
$pdf->Ln();

//fifth_row
$pdf->cell(10,8,"5",1,0,'L',true);
$pdf->cell(150,8,"Do you experience shortness of breath / difficulty in breathing?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($fifthLine),1,0,'C',true);
$pdf->Ln();

//sixth_row
$pdf->cell(10,8,"6",1,0,'L',true);
$pdf->cell(150,8,"Have you got unusual body aches / muscle pain?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($sixLine),1,0,'C',true);
$pdf->Ln();

//sev_row
$pdf->cell(10,8,"7",1,0,'L',true);
$pdf->cell(150,8,"Do you experience a loss of smell / taste?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($sevenLine),1,0,'C',true);
$pdf->Ln();

//eight_row
$pdf->cell(10,8,"8",1,0,'L',true);
$pdf->cell(150,8,"Are you nausea and/or do you experience unusual vomiting?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($eightLine),1,0,'C',true);
$pdf->Ln();

//nine_row
$pdf->cell(10,8,"9",1,0,'L',true);
$pdf->cell(150,8,"Have you got diarrhea?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($nineLine),1,0,'C',true);
$pdf->Ln();

//ten_row
$pdf->cell(10,8,"10",1,0,'L',true);
$pdf->cell(150,8,"Do you suffer from fatigue / physical weakness / tiredness?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($tenLine),1,0,'C',true);
$pdf->Ln();

//Heaiding // //
$pdf->SetFillColor(235);
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('','B',11);
$pdf->cell(10,8,"B",1,0,'L',true);
$pdf->cell(150,8,"Contact / Exposure Risk",1,0,'L',true);
$pdf->cell(30,8,"",1,0,'C',true);
$pdf->Ln();

$pdf->SetFillColor(255);
//first
$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0,0,0);
$pdf->cell(10,8,"1",1,0,'L',true);
$pdf->cell(150,8,"In the past 10 days have you tested positive for COVID-19?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($firstRisk),1,0,'C',true);
$pdf->Ln();

//second
$pdf->cell(10,8,"2",1,0,'L',true);
$pdf->cell(150,8,"In the past 10 days were you exposed to someone who positively diagnosed
with COVID-19?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($secRisk),1,0,'C',true);
$pdf->Ln();

//Heaiding
//second
$pdf->SetFillColor(235);
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('','B',11);
$pdf->cell(10,8,"C",1,0,'L',true);
$pdf->cell(150,8,"Other Risk Factors",1,0,'L',true);
$pdf->cell(30,8,"",1,0,'C',true);
$pdf->Ln();

//firstRow
$pdf->SetFillColor(255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->cell(10,8,"1",1,0,'L',true);
$pdf->cell(150,8,"Do you suffer from any pre-existing medical condition / chronic illness?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($firstFac),1,0,'C',true);
$pdf->Ln();

//trader_cdlupsidegap2crows
$pdf->cell(10,8,"2",1,0,'L',true);
$pdf->cell(150,8,"Are you 60 years of age or older?",1,0,'L',true);
$pdf->cell(30,8,strtoupper($secFac),1,0,'C',true);
$pdf->Ln();



$pdf->Output();
?>
