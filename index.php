<!DOCTYPE html>
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
  function load_country()
   {
       $opt='';
       $con= mysqli_connect("localhost", "root", "", "india")or die(mysqli_error($con));
       $queery="select distinct city_state from cities";
       $res= mysqli_query($con, $queery)or die(mysqli_errno($con));
       $count= mysqli_num_rows($res);
       $i=0;
       while($i!=$count)
       {
           $out= mysqli_fetch_array($res)or die(mysqli_error($con));
           $opt .='<option value="'.$out["city_state"].'">'.$out["city_state"].'</option>';
           $i++;
       }
       return $opt;
   }
  function load_month()
   {
       $opt='';
       $con= mysqli_connect("localhost", "root", "", "dob")or die(mysqli_error($con));
       $queery="select * from month_tb";
       $res= mysqli_query($con, $queery)or die(mysqli_errno($con));
       $count= mysqli_num_rows($res);
       $i=0;
       while($i!=$count)
       {
           $out= mysqli_fetch_array($res)or die(mysqli_error($con));
           $opt .='<option value="'.$out["month"].'">'.$out["month"].'</option>';
           $i++;
       }
       return $opt;
   }
?>
<html>

<header>
        <div class="menu-toggle" >
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="index.html">Naya<span>G</span>aadi</a></h1>
                <ul>
                    <li><a >Home</a></li>
                    <li><a >Services</a></li>
                    <li><a >About</a></li>
                    <li><a href="emi.php">emi calculator</a></li>
                </ul>
            </nav>
            <a class="brand" style="font-size:15px;padding-top: -10px;">Search.<span>Try.</span> Buy.</a>
        </div>
</header>

<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
        <title>Quote Generator</title>
        <script type="text/javascript">
        $(window).ready(function(){
$(".boton").wrapInner('<div class=botontext></div>');
    
    $(".botontext").clone().appendTo( $(".boton") );
    
    $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');
    
    $(".twist").css("width", "25%").css("width", "+=3px");
});
        </script>
        <script type="text/javascript">
            
           $(document).ready(function(){
            $('#state').change(function(){
             var sname=$(this).val();
             $.ajax({
                 
             url:"index6.php",
             method:"POST",
             data:{sname:sname},
             dataType:"text",
             success:function(data)
             {
               $('#city').html(data);
             }
            });
           });
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
           var bn="";
           $('#brand').change(function(){
            var bname=$(this).val();
            bn=bname;
            $.ajax({
            url:"index4.php",
            method:"POST",
            data:{bname:bname},
            dataType:"text",
            success:function(data1,data2)
             {  
               $('#model').html(data1);
             }
            });
           });
           $('#model').change(function(){
            var bname=bn;
            $.ajax({
            url:"index5.php",
            method:"POST",
            data:{bname:bname},
            dataType:"text",
            success:function(data1)
             {  
               $('#dealer').html(data1);
             }
            });
           });
          });    
        </script>
</head>
  
   
 <body>
            <form method="post" action="invoice_form_db.php">
    <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-left">Customer Info</h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </div>
                    </div>
                    <hr>
             
                        
                      <div class="row">
                      <label class="label col-md-2 control-label fl">Name</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="name" placeholder="Name">     
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">Phone</label>
                          <div class="col-md-10">
                          <input type="text" class="form-control" name="phone" placeholder="Phone">     
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">E-mail</label>
                          <div class="col-md-10">
                          <input type="email" class="form-control" name="email" placeholder="E-mail">     
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">Gender</label>
                          <div class="col-md-10">
                          <input type="radio" name="gn" value="male"><small>Male</small>  
                          <input type="radio" name="gn" value="female"><small>Female</small>  
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">DOB</label>
                    
                          <div class="col-md-10">
                              <input type="month" class="form-control" name="dob" >     
                          </div>
                          <!--     <div class="col-md-4 ">
                              
                         <select class="form-control" name="month" id="month">
                               <option disabled selected>Month</option>
                               <?php // echo load_month();?>
                          </select> 
                          </div>
                          <div class="col-md-3 ">
                          <select class="form-control" name="day" id="day">
                               <option disabled selected>Day</option>
                          </select> 
                          </div>
                          <div class="col-md-3 ">
                          <select class="form-control" name="year" id="year">
                          <option disabled selected>Year</option>
                          </select> 
                          </div> --> 
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">PAN</label>
                          <div class="col-md-10">
                          <input type="pan" class="form-control" name="pan" placeholder="PAN"> 
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">State</label>
                          <div class="col-md-10">
                          <select class="form-control" name="state" id="state">
                               <option disabled selected>Choose State</option>
                               <?php echo load_country();?>
                          </select>     
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">City</label>
                          <div class="col-md-10">
                          <select class="form-control" name="city" id="city">
                               <option disabled selected>Choose City</option>
                          </select>     
                          </div>
                      </div>
                      <div class="row">
                          <label class="label col-md-2 control-label fl">Address</label>
                          <div class="col-md-10">
                          <textarea class="form-control" name="address"></textarea>  
                          </div>
                      </div>
                        
                </div>
                <div class="col-md-5 col-md-offset-2">
                   <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-left">Vehicle Info</h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </div>
                   </div>
                   <hr>
                   <div class="row">
                        <label class="label col-md-2 control-label fl ">Type</label>
                        <div class="col-md-10">
                        <select class="form-control" name="vehicle" id="vehicle">
                               <option disabled selected>Choose Vehicle Type</option>
                               <?php echo load_tvehicle(); ?>
                        </select>     
                        </div>
                   </div>
                   <div class="row">
                        <label class="label col-md-2 control-label fl ">Make</label>
                        <div class="col-md-10 ">
                        <select class="form-control" name="brand" id="brand">
                               <option disabled selected>Choose Brand</option>
                        </select>     
                       </div>
                   </div>
                   <div class="row">
                         <label class="label col-md-2 control-label fl ">Model</label>
                         <div class="col-md-10 ">
                         <select class="form-control" name="model" id="model">
                               <option disabled selected>Choose Model</option>
                         </select>     
                         </div>
                   </div>
                   <div class="row">
                         <label class="label col-md-2 control-label fl ">Colour</label>
                         <div class="col-md-10 ">
                         <select class="form-control" name="colour" id="colour">
                               <option disabled selected>Choose Colour</option>
                               <option value="Blue">Blue</option>
                               <option value="Red">Red</option>
                               <option value="Orange">Orange</option>
                               <option value="White">White</option>
                               <option value="Green">Green</option>
                        </select>     
                        </div>
                   </div>
                   <div class="row">
                        <label class="label col-md-2 control-label fl ">Quantity</label>
                        <div class="col-md-10 ">
                        <select class="form-control" name="qty" id="qty">
                               <option disabled selected>Choose Quantity</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                               <option value="5">5</option>
                               <option value="6">6</option>
                               <option value="7">7</option>
                               <option value="8">8</option>
                               <option value="9">9</option> 
                        </select>     
                       </div>
                   </div>
                                
                   <div class="row">
                       <label class="label col-md-2 control-label fl ">Dealer</label>
                       <div class="col-md-10 ">
                       <select class="form-control" name="dealer" id="dealer">
                               <option disabled selected>Choose Dealer</option>
                       </select>     
                       </div>
                   </div>
                   <a href="#" class="boton">Generate<button type="submit"></button></a>
        <!--    <button type="reset" class="btn btn-warning">Reset</button>-->
                </div>
                
                      
            </div>
     </div>
                         </form>

  </body>
</html>
