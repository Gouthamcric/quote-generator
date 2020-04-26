<?php

$con= mysqli_connect("localhost", "root", "", "india")or die(mysqli_errno($con));
$state=$_POST['sname'];
$querry="select * from cities where city_state='$state'";
$res= mysqli_query($con, $querry)or die(mysqli_errno($con));

$count= mysqli_num_rows($res);

 $i=0;
$opt='<option disabled selected>Choose City</option>';
while($i!=$count)
 {
         $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
     $opt .='<option value="'.$out["city_name"].'">'.$out["city_name"].'</option>';


     $i++;

 }
 echo $opt;
?>

