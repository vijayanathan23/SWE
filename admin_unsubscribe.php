<?php
include 'admin_session.php';
include 'connect_db.php';
include 'navbar_a.php';
$orderID = $_POST['orderID'];
echo "<h1><center>Order $orderID's Unsubscription Confirmation!</center></h1>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
	<style type="text/css">
		#confirm_unsubscribe1{
			padding: 5px 10px;
      border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  width:30vw;
  height:70vh;
  background:white;
		}
		button{
	background-color: white;
  border:2px solid #f44336;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
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
<center>
<div id = "confirm_unsubscribe1">
	<br><br>
	<?php
	$sql = "SELECT * FROM unsubscribe where orderID = $orderID";
	$sql1 = "SELECT * FROM orders where orderID = $orderID";
	$result = $conn->query($sql);
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	$row = $result->fetch_assoc();
	echo "<b>Order Order</b> : ".$row1['from_date']."<br>";
	echo "<b>Order Plan :".$row1['plan'];
	echo "<br><h3 style='color:blue;'>Amount paid by the customer: </h3><h3>";
	if($row1['plan'] == 0)
	{
		echo "Rs.100";
	}
	else if($row1['plan']==1)
	{
		echo "Rs.250";
	}
	else
	{
		echo "Rs.999</h3>";
	}
	echo "</h3><br><p></p>";
	echo "<b style='color:blue'>Unscribing Date: </b>".$row['un_date'];

?>
<p><br>Enter Reasonable Refund and confirm Unsubscription</p>
<form action="/SWE/confirm_unsubscribe.php" method="post">
	<input type="" name="refund">
	<input type="hidden" name="orderID" value=<?php echo "'".$orderID."'";?>>
	<button>Confirm!</button>
</form>
</center>
</div>
</body>
</html>