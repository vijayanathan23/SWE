

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		button{
    background-image: radial-gradient(blue, purple,black);
    border: none;
    color: white;
  padding: 5px 10px;
  height:32vh;
  width:27vw;
  border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover{
	background-image: radial-gradient(blue, white,black);
	border:2px solid grey;
	color:black;
}
div{
	position:relative;
	height:100px;
	width:100px;
	border-width:10%;
}
#yearly{
left:70%;
}
#three_months{
	left:35%;
}
body{
	background:url("images/bgimg2.jpg") fixed center;
}
h1{
	font-family:"algerian";
}
</style>
<?php
include 'customer_session.php';
include 'connect_db.php';
if(isset($_POST['vendor_id']))
{
	$vid = $_POST['vendor_id'];
	$_SESSION['vid'] = $vid;
	$sql = "SELECT * FROM vendor where vendor_id = '$vid'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$one_month = $row['monthly'];
	$three_months = $row['three_months'];
	$yearly = $row['yearly'];
	echo "<script>var one_month = '$one_month';";
	echo "var three_months = '$three_months';";
	echo "var yearly = '$yearly';</script>";
}
?>
<h1><center>Choose A Plan & Pay</center></h1><br>
<div id="one_month"><center><button onclick="one()">One month plan <b>Rs.<?php echo "$one_month";?></b></button></center></div><br><br>
<div id="three_months"><center><button onclick="three()">Three month plan <b>Rs.<?php echo "$three_months";?></b></button></center></div><br><br>
<div id="yearly"><center><button onclick="year()">Yearly plan <b>Rs.<?php echo "$yearly";?></b></button></center></div><br>
<script type="text/javascript">
	var k;
	var opt;
	var x = document.getElementById('one_month');
	var y = document.getElementById('three_months');
	var z = document.getElementById('yearly');
	function one()
	{
		k = one_month;
		opt = 0;
		create_none();
	}
	function three()
	{
		k = three_months;
		opt = 1;
		create_none();
	}
	function year()
	{
		opt = 2;
		k = yearly;
		create_none();	
	}
	function create_none()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "/SWE/set_seesion.php?opt="+opt, true);
  		xhttp.send();
		a.style.display="block";
		a.src="/SWE/check.php";
		x.style.display="none";
		y.style.display="none";
		z.style.display="none";
	}
</script>
</head>
<body>
<iframe id="abc"></iframe>
</body>
<script type="text/javascript">
	var a = document.getElementById('abc');
	a.style.display="none";
</script>
</html>