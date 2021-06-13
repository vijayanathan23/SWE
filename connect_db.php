<?php
$servername = "sql12.freemysqlhosting.net:3306";
$username = "sql12380740";
$password = "iVbCbX25Us";
$db = "sql12380740";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";


/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "swe";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/
?>