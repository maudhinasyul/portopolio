<?php
require('includes/fpdf/fpdf.php');
// Database Connection 
$conn = new mysqli('localhost', 'root', '', '');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `spt` ORDER BY no_spt";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch(PDO::FETCH_ASSOC)){
  $id = $row->id;
  $name = $row->name;
  $address = $row->address;
  $phone = $row->phone;
  $pdf->Cell(20,10,$id,1);
  $pdf->Cell(40,10,$name,1);
  $pdf->Cell(80,10,$address,1);
  $pdf->Cell(40,10,$phone,1);
  $pdf->Ln();
}
$pdf->Output();
?>