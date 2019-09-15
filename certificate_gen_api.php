<?php 
        include_once('connection/database.php');
        extract($_POST);
        if(isset($submit)){
           $email=mysqli_real_escape_string($conn,$email);
           $rollno=mysqli_real_escape_string($conn,$rollno);
           $q="select * from register_student where email='$email' AND rollno='$rollno'";
           $res=mysqli_query($conn,$q);
           if(mysqli_num_rows($res)>0){
                 $row=mysqli_fetch_assoc($res);
                 $name=$row['name'];
                 $email=$row['email'];
                 $rollno=$row['rollno'];
                 $eventname=$row['eventname'];
                 $status=$row['status'];
               $dept_name=$row['department'];
            }
          }?>

    <?php  
if($status==true){
require('fpdf.php'); 
 class PDF extends FPDF 
{ 

function Footer() 
{ 

$this->SetY(-27); 
$this->SetFont('Arial','I',8); 

$this->Cell(0,10,'This certificate has been ©  © produced by MR Event System',0,0,'R'); 
} 
} 

$pdf = new FPDF('L','pt','A4'); 

//Loading data 
$pdf->SetTopMargin(20); $pdf->SetLeftMargin(30); $pdf->SetRightMargin(30); 

$pdf->AddPage('L'); 
//  Print the edge of
$pdf->Image("images/manav.jpg", 30, 30, 100); 
// Print the certificate logo  
//$pdf->Image("fpdf181/tt1.png", 140, 180, 240); 
// Print the title of the certificate  
$pdf->SetFont('Arial','',20); 
$pdf->Cell(780+15,60,"Manav Rachna International Institute Of Research & Studies",0,0,'C'); 

$pdf->Rect(10,10,820,575); 
$pdf->Rect(5,5,830,585);
$pdf->SetFont('Arial','B',16); 
$pdf->SetXY(480,500); 

$pdf->Cell(350,25,'Dean Of Fca',"T",0,'C'); 


$pdf->SetFont('Arial','B',30); 
$pdf->SetXY(180,90); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(350,14,'Technoholic',0,'C',0); 

$pdf->SetFont('Arial','B',30); 
$pdf->SetXY(270,150); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(350,14,'Certificate Of Appreciation',0,'C',0); 

$pdf->SetFont('Arial','B',15); 
$pdf->SetXY(730,230); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(30,14,'This is to certify Mr/Ms.__________________________'.$name.'__student / representation of',0,'C',0); 

$pdf->SetFont('Arial','B',15); 
$pdf->SetXY(720,280); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(40,14,'_________________'.$dept_name.'_____________________Participated Under_________'.$eventname.'__________',0,'C',0); 

$pdf->SetFont('Arial','B',15); 
$pdf->SetXY(720,330); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(30,14,'of event name  organized by FCA (Manav Rachna Educational Institutes,Sector-43 Delhi-Surajkund ',0,'C',0); 

$pdf->SetFont('Arial','B',15); 
$pdf->SetXY(310,380); 
$message = "ON COMPLETION OF"; 
$pdf->Cell(5,14,'Road Aravali Hills, Faridabad-121004).',0,'C',0); 



$pdf->SetFont('Arial','B',16); 
$pdf->SetXY(10,500); 
$signataire = "TheTUTOR"; 
$pdf->Cell(350,19,'HOD Of FCA',"T",0,'C'); 


$pdf->Output(); 
}
else{
    ?>
<script>
alert("Invalid Credential");
     location.href="certificate_gen.php";   
</script>
        <?php
}?> 
