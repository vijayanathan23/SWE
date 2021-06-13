<?php
include 'customer_session.php';
if(isset($_GET['opt']))
{
	$_SESSION['opt'] = $_GET['opt'];
}
else
{
	echo $_SESSION['opt'];
}
?>