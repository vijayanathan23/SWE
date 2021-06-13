<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
	<style type="text/css">
		#address_form{
		width:50vw;
	height:50vh;
	border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  margin-left:22vw;
  margin-top:10vh;
  background:rgba(0,0,0);
  opacity:0.8;
  color:white;
  font-family:'algerian';
  text-shadow:1px 1px 3px white;
}

button{
	background-color: white;
  border:2px solid #f44336;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover{
	background-color:#f44336;
	color:white;
}
body{
	background:rgb(255,255,255) url("images/bgimg5.jpg") fixed center;
}
	</style>

</head>
<body>
<?php
include 'customer_session.php';
include 'navbar_c.php';
if(!(isset($_SESSION['vid'])))
{
	header('Location: /SWE/validate.php');
}
?>
<h3>Congrats!! Your payment is Done! <br><br>Just enter address and start receiving your <i>Daily</i> from the date you want and where ever you want.</h3>
<div id = "address_form">
<form action="/SWE/insert_order.php" method="post">
	<center>
	<h2>Address:</h2>
	<p><textarea name="address" style="color:black;font-family:aerial"></textarea></p>
	<h2>Delivery From:</h2>
	<p><input type="" name="from_date" placeholder="dd-mm-yyyy" style="color:black;font-family:aerial"></p><br>
	<button style="color:black;">submit</button>
</center>
</form>
</div>
</body>
</html>