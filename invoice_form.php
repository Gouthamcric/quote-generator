<?php
$con= mysqli_connect("localhost", "root", "", "invoice_db");
$querry="select * from invoice_tb";

$res= mysqli_query($con, $querry);
$count= mysqli_num_rows($res);
for($i=0;$i<$count;$i++)
{
    $row= mysqli_fetch_array($res);
}
//$dname=$row["name"];
$querry2="select * from dealer_tb where name='Maximus Honda'";
$res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));
$count2= mysqli_num_rows($res2)or die(mysqli_errno($con));

for($i=0;$i<1;$i++)
{
    $row2= mysqli_fetch_array($res2);
}
require('fpdf/fpdf.php');
class PDF extends FPDF{

    function Footer(){
       
    $this->SetY(-15);
    $this->setFont('Arial','',8);
    $this->cell(0,10,'page'.$this->pageNo(),0,0,'C');

    }
}
//
$pdf=new PDF('p','mm','A3');//(297 x 420 mm)
$pdf->Addpage();
$pdf->Image('water.png',8,80,278);
$pdf->Image('sign.png',121,259,20,20);
$pdf->setFont('Arial','B',14);
//head
$pdf->cell(275,7,'NayaGaadi Performa Invoice',1,1,'C');

$pdf->setFont('Arial','',12);

$pdf->cell(275,6,'NGXXX01',1,0,'L');
$pdf->cell(-1,6,'Date:15-05-2019',0,1,'R');//(width,height,text,border,end line,[align])

//customer&dealer
$pdf->cell(130.5,6,'Customer Details',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'Dealer Details',1,1,'C');
$pdf->cell(130.5,6.666,$row["gender"]."".$row["name"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["gender"]."".$row2["name"],0,1,'L');
$pdf->cell(130.5,6.666,$row["address"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["address"],0,1,'L');
$pdf->cell(130.5,6.666,$row["City"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["City"],0,1,'L');
$pdf->cell(130.5,6.666,$row["state"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["state"],0,1,'L');
$pdf->cell(130.5,6.666,$row["email"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["email"],0,1,'L');
$pdf->cell(130.5,6.666,$row["phone"],0,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,6.666,$row2["phone"],0,1,'L');
$pdf->cell(130.5,-40,'',1,0,'L');
$pdf->cell(12,10,'',0,0);
$pdf->cell(132.5,-40,'',1,0,'L');

//$pdf->cell(12,-40,'',0,0);
//$pdf->cell(132.5,-40,'',1,1,'L');


//one line
$pdf->cell(275,6,'',0,1);

//vehicle$special note
$pdf->cell(130.5,6,'Vehicle Details',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'Special Notes',1,1,'C');
$pdf->cell(65.25,6,'Make',1,0,'C');
$pdf->cell(65.25,6,$row["make"],1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,36,'',1,0,'L');
$pdf->cell(0,6,'',0,1);//dummy
$pdf->cell(65.25,6,'Model',1,0,'C');
$pdf->cell(65.25,6,$row["model"],1,1,'C');
$pdf->cell(65.25,6,'Variant',1,0,'C');
$pdf->cell(65.25,6,'',1,1,'C');
$pdf->cell(65.25,6,'Colour',1,0,'C');
$pdf->cell(65.25,6,$row["colour"],1,1,'C');
$pdf->cell(65.25,6,'Quantity',1,0,'C');
$pdf->cell(65.25,6,$row["qty"],1,1,'C');
$pdf->cell(65.25,6,'Availability',1,0,'C');
$pdf->cell(65.25,6,'',1,1,'C');

$pdf->cell(275,6,'',0,1);

//cost_breakup$payment_details
$pdf->cell(130.5,6,'Cost Breakup',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'Payment Details',1,1,'C');
$pdf->cell(65.25,6,'Cost Item',1,0,'C');
$pdf->cell(12,6,'Qty',1,0,'C');
$pdf->cell(20.625,6,'Price',1,0,'C');
$pdf->cell(32.625,6,'Total',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'Booking Amount',1,0,'C');
$pdf->cell(90,6,'',1,1,'C');
$pdf->cell(65.25,6,'Ex-Showroom Price',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'Down Payment',1,0,'C');
$pdf->cell(90,6,'',1,1,'C');
$pdf->cell(65.25,6,'Life Tax @ 12%',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'Bank Loan',1,0,'C');
$pdf->cell(90,6,'',1,1,'C');
$pdf->cell(65.25,6,'Insurance',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'',1,1,'C');
$pdf->cell(65.25,6,'Hypothecation Fee',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,24,'Dealer RTGS',1,0,'C');
$pdf->cell(35,6,'Current A/C No',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,6,'RTA Challan',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'',0,0,'C');
$pdf->cell(35,6,'IFSC Code',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,6,'Auto Card',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'',0,0,'C');
$pdf->cell(35,6,'A/C Name',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,6,'Extended Warranty(5 yrs.)',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'',0,0,'C');
$pdf->cell(35,6,'A/C Address',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,6,'Fast Tag',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,24,'NayaGaadi RTGS',1,0,'C');
$pdf->cell(35,6,'Current A/C No',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,6,'Basic Accessories Kit',1,0,'C');
$pdf->cell(12,6,'',1,0,'C');
$pdf->cell(20.625,6,'',1,0,'C');
$pdf->cell(32.625,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'',0,0,'C');
$pdf->cell(35,6,'IFSC Code',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(65.25,12,'Total On-Road Price',1,0,'C');
$pdf->cell(12,12,'',1,0,'C');
$pdf->cell(20.625,12,'',1,0,'C');
$pdf->cell(32.625,12,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(42.5,6,'',0,0,'C');
$pdf->cell(35,6,'A/C Name',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(185,6,'',0,0,'C');
$pdf->cell(35,6,'A/C Address',1,0,'C');
$pdf->cell(55,6,'',1,1,'C');
$pdf->cell(275,6,'',0,1);
$pdf->cell(275,6,'Terms and Conditions',1,1,'C');
$pdf->cell(130.5,6,'Dealer',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'NayaGaadi',1,1,'C');
$pdf->cell(130.5,60,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,60,'',1,1,'C');
$pdf->cell(275,6,'',0,1);
$pdf->cell(130.5,6,'KYC Details - Checklist',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'Loan Docs - Checklist',1,1,'C');
$pdf->cell(130.5,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'',1,1,'C');
$pdf->cell(130.5,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'',1,1,'C');
$pdf->cell(130.5,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'',1,1,'C');
$pdf->cell(130.5,6,'',1,0,'C');
$pdf->cell(12,6,'',0,0);
$pdf->cell(132.5,6,'',1,1,'C');
$pdf->cell(132.5,6,'',0,1);
$pdf->cell(132.5,40,'ff',1,1);
$pdf->Output();
?>
<html>
    <head>
        <title>
            Invoice generator
        </title>
    </head>
</html>
