<?php
$con= mysqli_connect("localhost", "root", "", "invoice_db");
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$state=$_POST["state"];
$city=$_POST["city"];
$gender=$_POST["gn"];
//$dealer=$_POST["dealer"]; later use
$dealer=$_POST["dealer"];
$type=$_POST["vehicle"];
$make=$_POST["brand"];
$model=$_POST["model"];
$colour=$_POST["colour"];
$qty=$_POST["qty"];
$gen="Mr.";
if($gender=="female")
{
    $gen="Miss.";
}
$address=$_POST["address"];
$city=$_POST["city"];
$querry="insert into invoice_tb values ('$name','$phone','$email','$gen','$address','$city','$state','$dealer','$type','$make','$model','$colour','$qty')";
$res= mysqli_query($con, $querry) or die(mysqli_error($con));
header('Location: invoice_form.php')
?>


