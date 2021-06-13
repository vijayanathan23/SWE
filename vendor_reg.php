<?php 
 include "navbar.php";
 include "connect_db.php";
 
 ?>




<!DOCTYPE html>
<html>
<head>
  <title>Vendor Registration</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
       section
    {
    margin-top: -20px;
     }
     ul li a{
        display: block;
        padding: 8px 25px;
        color: white;
        text-decoration: none;
    }
     ul li a:hover{
        color: black;
        background: #fff;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: black;
        display: none;
        position: absolute;
        z-index: 999;
        left: 10;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
    .reg
{
     
     background-image: url("images/101.jpg");
     height: 740px;
     
}
.box2
{
   height:600px;
    width: 338px;
    background-color: #000000;
    margin-left:100px ;
    margin-top:20px;
    opacity: .68;
    color: white; 
    border-radius: 30px;
}
form .register
{
    margin:auto 50px;
}
  </style>
</head>

<body>
<section>
  <div class="reg">
    <h1 style="font-size: 50px;padding-left: 135px;padding-top: 20px;color: white;">WELCOME!</h1>
    <div class="box2">
      <h1 style="text-align:center;padding:15px;margin-bottom:-10px;font-size:35px">SIGN UP</h1><br>
      <form name="register" action="" method="post">
        <div class="register">
        <input class="form-control" type="text" name="papername" placeholder="Name of paper" required=""><br>
        <input class="form-control" type="text" name="paypalid" placeholder="Paypal ID" required=""><br>
                <input class="form-control" type="text" name="costofone" placeholder="Cost of each paper(in Rs)" required=""><br>
                <input class="form-control" type="text" name="month" placeholder="Cost of paper per month(in Rs)" required=""><br>
                 <input class="form-control" type="text" name="three" placeholder="Cost of paper per 3 months(in Rs)" required=""><br>
                <input class="form-control" type="text" name="year" placeholder="Cost of paper per year(in Rs)" required=""><br>
                <input class="form-control" type="text" name="lan" placeholder="Language of published newspaper" required=""><br>
        <input class="form-control" type="Password" name="password" placeholder="Password" required=""><br>
               <input class="btn btn-default" type="submit" name="submit" value="Sign up" style="color:black;width:70px;margin-left:60px;">
               </div>     
      </form>
      <p style="color: white;">
              
              
              <p style="margin-left:35px";>Already registered ?  <a style="color: white;"href="vendor_reg.php">Login</a></p>
            </p>
        </div>
    </div>
</section>
  

<?php


  if(isset($_POST['submit']))
      {
       
            mysqli_query($conn,"INSERT INTO vendor(paper_name,paypal_id,costOfOne,monthly,yearly,three_months,pwd,lang) VALUES('$_POST[papername]','$_POST[paypalid]','$_POST[costofone]','$_POST[month]','$_POST[year]','$_POST[three]','$_POST[password]','$_POST[lan]');");
      
        

          ?>
            <script type="text/javascript">
              alert("Registered successfully!");
            </script>
          <?php

        

      }

    ?>
     
</body>

</html>

