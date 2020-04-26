<?php

$con= mysqli_connect("localhost", "root", "", "vehicle")or die(mysqli_errno($con));
$bn=$_POST['bname'];

$querry2="select * from dealer where bname='$bn'";

$res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));


$count2= mysqli_num_rows($res2);

 $i=0;
 $j=0;

$opt2=   '<option disabled selected>Choose dealer</option>';

 while($j!=$count2)
 {
         $out2= mysqli_fetch_array($res2)or die(mysqli_errno($con));
      $opt2 .='<option value="'.$out2["dname"].'">'.$out2["dname"].'</option>';
    


     $j++;

 }
 

  echo $opt2;
?>

