<?php
session_start();
if(!(isset($_SESSION['cust_id'])))
{
	header('Location: /SWE/validate.php');
}
?>