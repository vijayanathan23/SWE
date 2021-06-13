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
  margin-top:10px;
}
tr{background:blue;}
tr:hover{background:rgba(0,0,0,0.3);}
th {
  background:rgba(0,0,255,0.7);
  color: black;
}
#box{
	width:70vw;
	height:70vh;
	border:2px solid grey;
	border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  margin-left:15vw;
  margin-top:10vh;
  background:rgba(0,255,255,0.5);
  text-shadow:2px 1px 3px black;
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
<?php
include 'connect_db.php';
include 'admin_session.php';
include 'navbar_a.php';
$vid = $_GET['vendor_id'];
$plan0 =0;
$plan1 =0;
$plan2 =0;
$sql = "SELECT * FROM orders where vendor_id=$vid";
?>
<div id = "box">
<table style="width:100%">
	<tr>
		<th>OrderID</th>
		<th>Plan</th>
		<th>Delivery From Date</th>
		<th>Address</th>
	</tr>
	<?php
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			if($row['plan']==0)
			{
				$plan0 = $plan0+1;
			}
			else if($row['plan']==1)
			{
				$plan1 = $plan1+1;
			}
			else
			{
				$plan2 = $plan2+1;
			}
			echo "<tr>";
			echo "<td>".$row['orderID']."</td>";
			echo "<td>".$row['plan']."</td>";
			echo "<td>".$row['from_date']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "</tr>";
		}
	?>
</table>	

<?php
$total_revenue = ($plan0*90)+($plan1*200)+($plan2*999);
echo "<h3>Total Revenue from vendor $vid is <i>Rs.".$total_revenue."</i></h3>";
?>
</div>
</body>
</html>
