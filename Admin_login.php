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
		margin-top: -25px;
		 height: 500px;
    width:1520px;
    background-color: grey;
	}
	
	.box1
{
    height:350px;
    width: 350px;
    background-color: #000000;
    margin:60px auto;

    opacity: .68;
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
     background-image: url("images/pw.jpg");
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
			
			<h1 style="text-align:center;padding:15px;font-size:35px;">Hey Admin! Password, please..!</h1><br>
			<form name="login" action="/SWE/validate.php" method="post">
				
				<div class="login">
				
				<input class="form-control" type="Password" name="password" placeholder="Password" required=""><br><br>	
        <input type="hidden" name="loginType" value="admin">
				<input class="btn btn-default" type="submit" name="SUBMIT" value="Login" style="color: black;width: 90px;margin-left: 75px"></div>			
			</form>


	</div>

</div>

</section>

<?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      $row=mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        /*----------if username and pw matches------*/

        $_SESSION['login_user'] = $_POST['username']; 
        $_SESSION['pic']=$row['pic'];

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>

</body>
</html>


     