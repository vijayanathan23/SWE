<?php 
session_start();
?>
<!DOCTYPE html>	
<html>
<head>
	<title>
		News Torrent #Not pirated
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style type="text/css">
		
nav
{
    float:right;
    word-spacing: 20px;
    padding: 15px;
    margin-left: 10px;
}
nav li
{
    display: inline-block;
    line-height: 57px;
}		
.fa
{
			margin: 0px 5px;
			padding: 5px;
			font-size: 20px;
			width: 27px;
			height: 27px;
			text-align: center;
			text-decoration: none;
			border-radius: 50%;
		}
		.fa:hover
		{
			opacity: .7;
		}
		.fa-facebook
		{
			background: #3B5998;
			color: black;
		}
		.fa-twitter
		{
			background: #55ACEE;
			color: black;
		}
		.fa-google
		{
			background: #dd4b39;
			color: black;
		}
		.fa-instagram
		{
			background: #F20059;
			color: black;
		}
		.fa-yahoo
		{
			background: #400297;
			color: black;
		}

    ul{
        padding: 0;
        list-style: none;
        
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 35px;
        text-align: left;
        color: white;
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
        left: 0;
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
  <div class="wrapper">
	 <header>
	 	<div class="logo" ;><img src="images/log.jpg" style="padding-top: 5px;" >
	 		<h1 style="color:white;float:right;padding-left: 10px;padding-top: 7px;font-size: 25px"><b> NEWS TORRENT</b> </h1>
	 </div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size: 17px;"> HOME</span></a></li>
						<li><a href="">DASHBOARD</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="fb.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size: 17px;"><b>HOME</b></span></a></li>
		<li>
            <a href="#"><span class="glyphicon glyphicon-log-in" style="font-size: 17px;"><b>LOGIN</b></b></a>
            <ul class="dropdown">
                <li><a href="customer_login.php">USER</a></li>
                <li><a href="vendor_login.php">VENDOR</a></li>
                <li><a href="Admin_login.php">ADMIN</a></li>
            </ul>
        </li>
        
        <li>
            <a href="#"><span class="glyphicon glyphicon-pencil" style="font-size: 17px;"><b>REGISTER</b></span></a>
            <ul class="dropdown">
                <li><a href="user_reg.php">USER</a></li>
                <li><a href="vendor_reg.php">VENDOR</a></li>
                
            </ul>
        </li>
								
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>   	   
	 </header>
     <section>
     <div class="sec_img">
     	<br><br><br>
     	<div class="box">
     		<br><br><br><br>
     		<h1 style="text-align: center;font-size: 35px;margin-top: -20px;">WELCOME to!</h1>
     		<h1 style="text-align: center;font-size: 35px;color: #72B23D;"><b>NEWS TORRENT</b></h1>
     		<h1 style="font-size: 25px;margin-left: 270px;"><i> #NotPirated</i> </h1><br>
     		<h3 style="color:white;text-align: center;color: #72B23D;"> Subscribe Now to receive your daily newspaper ! </h3><br>
     		
     		<h3 style="color:white;text-align: center;">Contact us through social media</h3><br>

	<div class="footer"style="margin-left: 120px">

		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-instagram"></a>
		<a href="#" class="fa fa-yahoo"></a>
	</div>

	<br>
	<h3 style="color:white;text-align: center;">
		
		Email:&nbsp news.torrent@gmail.com <br><br>
		
	</h3>
     		
     </div>	
	  </div>
     </section>
     
   
   
</body>
</html>