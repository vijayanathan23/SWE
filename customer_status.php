<?php
include 'connect_db.php';
include 'navbar_cs.php';
session_start();
$cust_id = $_SESSION['cust_id'];

$sql = "SELECT * FROM orders WHERE cust_id = $cust_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
<style>
table, th, td {
  border-collapse: collapse;
  border-bottom: 1px solid #ddd;
  text-align:left;
  padding: 12px;
}
tr{background-color: #f2f2f2;}
tr:hover{background:rgba(0,255,0,0.3);}
th {
  background-color: rgba(0,0,255,0.7);
  color: white;
}
button{
	background-color: white;
  border:2px solid #f44336;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 3px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover{
	background-color:#f44336;
	color:white;
}
#order_details,#unsubscription_details{
	width:70vw;
	height:40vh;
	border-radius: 2px 35px;
  box-shadow:2px 2px 7px black;
  margin-left:15vw;
  margin-top:-1vh;
  background:rgba(0,255,255,0.7);
  text-shadow:1px 1px 3px red;
   overflow: auto;
}
#unsubscription_details{
	margin-top:2vh;
}
#order_details:hover,#unsubscription_details:hover{
	background:white;
	transition:background 0.75s ease-in-out;
}
body{
	background:url("images/bgimg3.jpg") fixed center;
}
::-webkit-scrollbar {
  width: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: green; 
  border-radius: 2px 35px;
}

</style>
</head>
<body>
		<div id = "order_details">
			<center>
				<br>
		<h1>Your Order Details</h1>
		<form action="/SWE/unsubscribe.php" method="POST">
<table>
	<tr>
		<th>Order ID</th>
		<th>Plan</th>
		<th>From</th>
		<th>Address</th>
		<th>Unsubscribe</th>
	</tr>
	<?php
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>";
			echo "<td>".$row['orderID']."</td>";
			echo "<td>".$row['plan']."</td>";
			echo "<td>".$row['from_date']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td><button name='order_id' value='".$row['orderID']."'>Unsubscribe</button></td>";
			echo "</tr>";
		}
	?>
</table>
</form>
</center>
</div>
<div id = "unsubscription_details">
<center>
<br><br>	
<h1>Your unsubscription details</h1>
<?php
$cust_id = $_SESSION['cust_id'];
$sql2 = "SELECT * FROM unsubscribe WHERE cust_id=$cust_id";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	echo "<p>";
    echo "<b>Unsubscribed orderID: " . $row["orderID"]."</b><br>";
    echo "<br>";
    if(isset($row['refund_amt']))
    echo "<b>Refund Amount :</b>".$row['refund_amt']."<br><b>Unsubscription Confirmed!</b><br>";
	else{
		echo "Your unsubscription is not Confirmed yet , you can see the refund amount once the unsubsripiton is Done!";
    	echo "<br>";
    	echo "Please Contact Support within 24 hrs to resolve issues or if the unsubscription is not confirmed</p>";
  }
  echo "<br>";
}
} else {
  echo "<h2>No unsubscription</h2>";
}
?>
</center>
</div>
</body>
</html>