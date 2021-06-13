<?php
include 'customer_session.php';
include 'connect_db.php';
if (isset($_POST['order_id']))
{
	$order_id = $_POST['order_id'];
	$sql3 = "SELECT * FROM orders where orderID=$order_id";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();
	$vendor_id =  $row3['vendor_id'];
	$sql = "SELECT * FROM unsubscribe WHERE orderID = $order_id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$mydate=getdate(date("U"));
	$un_date = $mydate['mday']."-".$mydate['mon']."-".$mydate['year'];
	$isConfirm = 0;
	$cust_id = $_SESSION['cust_id'];	
		if(!(isset($row['orderID'])))
		{
			$sql2 = "INSERT INTO unsubscribe (orderID,un_date,isConfirm,cust_id,vendor_id) VALUES ($order_id,'$un_date',$isConfirm,$cust_id,$vendor_id)";
			$conn->query($sql2);
			header('Location: /SWE/customer_status.php');
		}
		else
		{
			echo "<h1><center>You already unsubscribed!! Page will refresh in 3 seconds</center></h1>";
			header('refresh:3	;url=/SWE/customer_dashboard.php');
		}

}
else{
	echo "Try again please!, you will be redirected  in 2 seconds";
	header('refresh:2	;url=/SWE/customer_dashboard.php');
}

?>