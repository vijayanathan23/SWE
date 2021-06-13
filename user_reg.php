<?php 
 include "navbar.php";
 include "connect_db.php";
 
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
	</style>
</head>

<body>
<section>
	<div class="reg">
		<h1 style="font-size: 50px;padding-left: 75px;padding-top: 50px;color: white;">WELCOME!</h1>
   
		<div class="box2">
			<h1 style="text-align:center;padding:25px;margin-bottom:-10px;font-size:35px">SIGN UP</h1><br>
			<form name="register" action="" method="post">
				<div class="register">
				<input class="form-control" type="text" name="name" placeholder="Full Name" required=""><br><br>
				
                <input class="form-control" type="text" name="mail" placeholder="Email" required=""><br><br>
               
               
               
				<input class="form-control" type="Password" name="password" placeholder="Password" required="">
               <input class="btn btn-default" type="submit" name="submit" value="Sign up" style="color:black;width:70px;margin-left:70px;margin-top: 20px;">
               </div>			
			</form>
      <p style="color: white;">
              
              
              <p style="margin-left:35px; padding-top:10px;";>Already registered ?  <a style="color: white;"href="customer_login.php">Login</a></p>
            </p>
        </div>
    </div>
</section>
  

<?php


  if(isset($_POST['submit']))
      {
          

            mysqli_query($conn,"INSERT INTO customer(name,email,pwd) VALUES('$_POST[name]','$_POST[mail]','$_POST[password]');");
      
        

          ?>
            <script type="text/javascript">
              alert("Registered Successfully!");
            </script>
          <?php

        

      }

    ?>
     
</body>

</html>
