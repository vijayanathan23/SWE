<?php
include 'vendor_session.php';
include 'connect_db.php';
include 'navbar_v.php';
$vendor_id = $_SESSION['vendor_id'];
$sql1 = "SELECT * FROM vendor where vendor_id=$vendor_id";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$p0 = $row1['monthly'];
$p2 = $row1['yearly'];
$p1 = $row1['three_months'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
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
	background-color:#808080;
	border:2px solid #808080;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button a{
	color:white;
}
button:hover a{
	color:blue;
}
button:hover{
	background-color: white;
  border:2px solid #f44336;
}
body{
	background:rgb(255,255,255) url("images/bgimg4.jpg") fixed center;
}
h1{
	letter-spacing:3px;
	font-family:'algerian';
}
#abc,#bcd,#cde{
	height:30vh;
	width:22vw;
	border:3px solid grey;
	background:white;
	margin-left:10vw;
	padding:2px;
	color:black;
	border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
}
#abc:hover,#bcd:hover,#cde:hover{
	background:rgba(0,255,255,0.5);
}
#bcd{
  margin-left:70vw;
  margin-top:-29vh;
}
#cde{
	margin-top:10vh;
	margin-left:40vw;
}
li,b{
	margin-left:3px;
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
<h1><center>Hello there!</center></h1>
<?php
echo "<div id = 'abc'>";
echo "<h3><center>Your NewsPaper Details!</center></h3>";
echo "<br><b>Your plans!</b>";
echo "<li>Monthly: Rs.$p0</li>";
echo "<li>Three months: Rs.$p1</li>";
echo "<li>Yearly: Rs.$p2</li>";
echo "</div>";
$plan0 = 0;
$plan1 = 0;
$plan2 = 0;
?>
<?php
$sql = "SELECT * FROM orders where vendor_id = $vendor_id";
$ct = 0;
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	if($row['plan']==0)
	{
		$plan0 =$plan0+1;
	}
	else if($row['plan'] == 1)
	{
		$plan1=$plan1+1;
	}
	else
	{
		$plan2 = $plan2+1;
	}
	$ct = $ct+1;
}
echo "<div id = 'bcd'>";
echo "<h3><center>Subscribers :)</center></h3>";
echo "You have a total of <b>";
echo $ct."</b> Order(s)";
echo "<br><button ><a href='/SWE/all_vendor_orders.php'>Click here to see details of all orders</a></button>";
echo "</div>";
?>
<div id = "cde">
<center>
<h3>Unsubscriptions :(</h3>
<table>
<tr>
	<th>OrderID</th>
	<th>Refunds(Rs.)</th>
</tr>
<?php
$sql5 = "SELECT * FROM unsubscribe where vendor_id = $vendor_id and isConfirm=1";
$result5 = $conn->query($sql5);
while($row5 = $result5->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$row5['orderID']."</td>";
	echo "<td>".$row5['refund_amt']."</td>";
}
?>
</table>
</center>
</div>
</body>
</html>
