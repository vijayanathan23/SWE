<?php
include 'connect_db.php';
include 'customer_session.php';

$vid = $_SESSION['vid'];
unset($_SESSION['vid']);
$cust_id = $_SESSION['cust_id'];
$plan = $_SESSION['opt'];
unset($_SESSION['opt']);
$payment = "Done";
$from_date = $_POST['from_date'];
$address = $_POST['address'];

$sql = " INSERT INTO orders (vendor_id,cust_id,plan,payment,from_date,address) VALUES ($vid,$cust_id,$plan,'$payment','$from_date','$address') ";

if ($conn->query($sql) === TRUE) {
  echo "<b>Your order is successful!!</b><br>You will be redirected to your dashboard in a few seconds";
  header( "refresh:3;url=/SWE/customer_dashboard.php" );

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

