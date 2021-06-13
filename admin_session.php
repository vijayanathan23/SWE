<?php
session_start();
if(!(isset($_SESSION['admin'])))
{
	header('Location: /SWE/validate.php');
}
?>