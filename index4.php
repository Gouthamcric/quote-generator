<?php

$con= mysqli_connect("localhost", "root", "", "vehicle")or die(mysqli_errno($con));
$bn=$_POST['bname'];
$querry="select * from model where bname='$bn'";

$res= mysqli_query($con, $querry)or die(mysqli_errno($con));


$count= mysqli_num_rows($res);


 $i=0;
 $j=0;
$opt=   '<option disabled selected>Choose model</option>';

while($i!=$count)
 {
         $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
     $opt .='<option value="'.$out["mname"].'">'.$out["mname"].'</option>';
    


     $i++;

 }
 
 echo $opt;

?>

