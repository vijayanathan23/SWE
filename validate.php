<?php
include 'connect_db.php';
if(isset($_POST['loginType']))
{
	if($_POST['loginType'] == 'customer')
	{
		echo 'Customer login validation';
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM customer where email = '$email'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($row['pwd'] == $password)
		{
			echo '<br>Login Successfull and redirecting	';
			header('Location: /SWE/customer_dashboard.php');
			session_start();
			$_SESSION['cust_id'] = $row['userId'];
		}
		else
		{
				echo "<h1 style='color:red'>WRONG Credential</h1><h3>You are Legen-Wait-for-it-Dary!!!</h3><br>Chill! you can login again in 3 seconds";
				header( "refresh:3;url=/SWE/customer_dashboard.php" );
		}
	}
	#For Vendors
	else if($_POST['loginType'] == 'vendor')
	{
		$paypal = $_POST['paypal_id'];
		$password = $_POST['password'];
		$sql1 = "SELECT * FROM vendor where paypal_id = '$paypal'";
		$result1 = $conn->query($sql1);
		$row = $result1->fetch_assoc();
		if($row['pwd'] == $password)
		{
			echo '<br>Login Successfull and redirecting	';
			header('Location: /SWE/vendor_dashboard.php');
			session_start();
			$_SESSION['vendor_id'] = $row['vendor_id'];
		}
		else
		{
				echo "<h1 style='color:red'>WRONG Credential</h1><h3>You are Legen-Wait-for-it-Dary!!!</h3><br>Chill! you can login again in 3 seconds";
				header( "refresh:3	;url=/SWE/vendor_login.php" );
		}
	}
	#for Admins 
	else
	{
		$password = $_POST['password'];
		if($password == "admin")
		{
			echo '<br>Login Successfull and redirecting	';
			header('Location: /SWE/admin_dashboard.php');
			session_start();
			$_SESSION['admin'] = "admin";
		}
		else
		{
			echo "<h1 style='color:red'>WRONG Credential</h1><h3>You are Legen-Wait-for-it-Dary!!!</h3><br>Chill! you can login again in 3 seconds";
				header( "refresh:3	;url=/SWE/Admin_login.php" );
		}
	}

}
else
{
	echo "<h1>You are Legen-Wait-for-it-Dary!!!</h1><br>please login!";
	//Enter URL for the main page for login
}
?>