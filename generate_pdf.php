<?php
require('fpdf.php');

// Получение данных из формы
$invoiceNumber = isset($_POST['invoiceNumber']) ? $_POST['invoiceNumber'] : '';
$invoiceDate = isset($_POST['invoiceDate']) ? $_POST['invoiceDate'] : '';
$serviceName = isset($_POST['serviceName']) ? $_POST['serviceName'] : '';
$serviceTerm = isset($_POST['serviceTerm']) ? $_POST['serviceTerm'] : '';
$servicePrice = isset($_POST['servicePrice']) ? $_POST['servicePrice'] : '';
$clientInfo = isset($_POST['clientInfo']) ? $_POST['clientInfo'] : '';
$contractText = isset($_POST['contractText']) ? $_POST['contractText'] : '';

// Создание PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Счет');
$pdf->Ln();
$pdf->Cell(40,10,'Номер счета: '.$invoiceNumber);
$pdf->Ln();
$pdf->Cell(40,10,'Дата счета: '.$invoiceDate);
$pdf->Ln();
$pdf->Cell(40,10,'Услуга / Товар: '.$serviceName);
$pdf->Ln();
$pdf->Cell(40,10,'Срок оказания услуги (в днях): '.$serviceTerm);
$pdf->Ln();
$pdf->Cell(40,10,'Цена услуги / Товара: '.$servicePrice);
$pdf->Ln();
$pdf->Cell(40,10,'Реквизиты клиента: '.$clientInfo);
$pdf->Ln();
$pdf->Cell(40,10,'Текст договора: '.$contractText);
$pdf->Output();
?>
