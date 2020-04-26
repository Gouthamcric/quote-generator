<?php

$con= mysqli_connect("localhost", "root", "", "vehicle")or die(mysqli_errno($con));
$type=$_POST['type'];
$querry="select * from brand where type='$type'";
$res= mysqli_query($con, $querry)or die(mysqli_errno($con));

$count= mysqli_num_rows($res);

 $i=0;
$opt=   '<option disabled selected>Choose Brand</option>';
while($i!=$count)
 {
         $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
     $opt .='<option value="'.$out["bname"].'">'.$out["bname"].'</option>';


     $i++;

 }
 echo $opt;
?>

