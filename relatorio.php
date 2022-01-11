<?php
include('fpdf.php');
include("config.php");

$sql = "SELECT * FROM usuario WHERE id_usuario = ".$_REQUEST["id"];
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();


$nome  = $row->nome_usuario;
$email  = $row->email_usuario;
$data  = $row->data_usuario;


$pdf = new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,30,"$nome / $email / $data");
$pdf->Output();
?>