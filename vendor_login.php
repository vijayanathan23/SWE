<?php
    include "navbar.php";
    include "connect_db.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	section
	{
		margin-top: -20px;
		 height: 500px;
    width:1520px;
    background-color: grey;
	}
	
	.box1
{
    height:425px;
    width: 370px;
    background-color: #000000;
    margin:60px auto;
    margin-left: 150px;
    opacity: .78;
    color: white;
    border-radius: 10px;

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
    .log
{
     margin-top:0px;
     background-image: url("images/61.jpg");
     height: 750px;
     width: 100% ;
}
</style>
</head>
<body>

<section>
<div class="log">
		<br><br><br>
	<div class="box1">
			
			<h1 style="text-align:center;padding-top:15px;font-size:35px;">HEY VENDOR !</h1>
			<h1 style="text-align:center;font-size:35px;">LOGIN </h1><br>
			<form name="login" action="validate.php" method="post">
				
				<div class="login">
				  <input class="form-control"  type="email" name="paypal_id" placeholder="Email" required=""><br><br>
				<input class="form-control" type="password" name="password" placeholder="Password" required=""><br><br>	
   <input type="hidden" name="loginType" value="vendor">
				<input class="btn btn-default" type="submit" name="SUBMIT" value="Login" style="color: black;width: 90px;height:40px;margin-left: 75px"></div>			
			</form>
			<p style="color: white;">
            	<br>
            	
            	<p style="margin-left:35px";>New Vendor ?  <a style="color: white;"href="vendor_reg.php">Sign Up</a></p>
            </p>
	</div>

</div>

</section>


</body>
</html>



