<?php
function load_tvehicle()
{
    $opt='';
 $con= mysqli_connect("localhost", "root", "", "vehicle")or die(mysqli_errno($con));
 $querry="select * from tvehicle";
 $res= mysqli_query($con, $querry)or die(mysqli_errno($con));

 
$count= mysqli_num_rows($res);
 $i=0;
while($i!=$count)
 {
         $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
     $opt .='<option value="'.$out["Type"].'">'.$out["Type"].'</option>';

     $i++;

 }
 return $opt;
}


?>

<html>
    <head>
        <title></title>
            <script src="bootstrap/js/jquery.js" type="text/javascript"></script>
         <script type="text/javascript">
    
$(document).ready(function(){
    $('#vehicle').change(function(){
        var type=$(this).val();
    $.ajax({
        url:"index3.php",
        method:"POST",
        data:{type:type},
        dataType:"text",
        success:function(data)
        {
            $('#brand').html(data);
        }
    });
    });
});    
</script>
    </head>
   
    <body>
       
        <p>select vehicle type
        <select name="vehicle" id="vehicle">
            <option value="">select type</option>
            <?php echo load_tvehicle(); ?>
        </select>
            </p>
            <p><select name="brand" id="brand">
            <option value="">select brand</option>
            
     
        </select>
                </p>
                    <p><select name="dealer" id="dealer">
            <option value="">select dealer</option>
            
     
        </select>
                </p>
    </body>
         

</html>


