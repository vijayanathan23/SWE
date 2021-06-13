<?php
include 'connect_db.php';
include 'vendor_session.php';
include 'navbar_vo.php';
$vendor_id = $_SESSION['vendor_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
	<style type="text/css">
	table, th, td {
  border-collapse: collapse;
  border-bottom: 1px solid #ddd;
  text-align:left;
  padding: 12px;
}
#all_orders{
	padding: 5px 10px;
      border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  width:40vw;
  height:70vh;
  background:white;
  overflow:auto;
}
tr{background-color: #f2f2f2;}
tr:hover{background:rgba(0,255,0,0.3);}
th {
  background-color: rgba(0,0,255,0.7);
  color: white;
}
body{
	background:linear-gradient(90deg,white,rgba(0,255,255,0.5),rgba(128,0,128,0.5));
}
</style>
</head>
<body>
	<center>
	<div id="all_orders">
<h1>All of your Orders through <b><I>NewsTorrent!</I></b></h1>
<table>
	<tr>
		<th>OrderID</th>
		<th>Plan</th>
		<th>From-Date</th>
	</tr>

<?php
$sql = "SELECT * FROM orders where vendor_id = $vendor_id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$row['orderID']."</td>";
	echo "<td>".$row['plan']."</td>";
	echo "<td>".$row['from_date']."</td>";
	echo "</tr>";
}
?>
</table>
</div>
</center>
</body>
</html>