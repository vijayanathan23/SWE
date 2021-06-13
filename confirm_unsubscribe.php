<?php
include 'connect_db.php';
include 'navbar_cs.php';
$orderID = $_POST['orderID'];
$refund = $_POST['refund'];
$sql = "UPDATE unsubscribe SET isConfirm=1,refund_amt=$refund where orderID=$orderID";
$sql2 = "DELETE from orders where orderID=$orderID";
$conn->query($sql);
$conn->query($sql2);
echo "<h1><center>Unsubscription Successful!</center></h1>";
header( "refresh:2;url=/SWE/admin_dashboard.php" );
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
</head>
<body>

</body>
</html>