<?php
include 'connect_db.php';
include 'admin_session.php';
include 'navbar_a.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>NEWS TORRENT #NOT PIRATED</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
    #xyz{
      padding: 5px 10px;
      border-radius: 2px 35px;
  box-shadow:2px 2px 6px black;
  width:30vw;
  height:70vh;
  background:white;
  overflow:auto;
    }
    button{
  background-color: white;
  border:2px solid #f44336;
  color: black;
  padding: 2px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover{
  background-color:#f44336;
  color:white;
}
i:hover{
	color:green;
	transition:color 0.5s linear;
}
    body{
      background:rgb(255,255,255) url("images/bgimg5.jpg") fixed center;
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
<center>
<div id="xyz">
<?php
echo "<h1>Hi &#128075;, Admin</h1>";
echo "<p>Here are the list of vendor_id(s) of the orders received and the total orders:</p> ";
echo "<form action='/SWE/admin_view_orders.php' method='GET'>";
$sql = "SELECT DISTINCT vendor_id from orders";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  $vid = $row['vendor_id'];
    $sql1 = "SELECT count(*) FROM orders WHERE vendor_id=$vid";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    echo "<p>";
    echo "<b>Vendor_id :</b><button name='vendor_id' value='$vid'>".$row['vendor_id']."</button>&emsp;<br><br><b>Total Orders :</b>".$row1['count(*)'];
    echo "</p>";
    echo "<br>";
  }
  echo "</form>";
  echo "<p style='color:blue'>*Click on the corresponding vendor Id to view orders of that customer</p>";
  echo "<br>";
  echo "<p><b>Unsubscribed customer Details</b></p>";
  echo "<form action='admin_unsubscribe.php' method='post'>";
  $sql2 = "SELECT * FROM unsubscribe where isConfirm=0";
  $res = $conn->query($sql2);
  while($row3 = $res->fetch_assoc()){
    echo "<b>Date: </b>".$row3['un_date']." <b>Cutomer ID: </b><button name='orderID' value='".$row3['orderID']."'> ".$row3['orderID']."</button><br></b>";
  }
  echo "<p style='color:blue'>*Click on the corresponding customer to Confirm His/Her unsubscription</p>";
  echo "<p style='color:blue'>*Date => When the customer initiated unsubscription</p>";
  echo "</form>";
?>

</div>
<br>
<a href="/SWE/Deliver.php"><i class="fas fa-2x fa-file-excel"><br>Download Spreadsheet</i></a>
</center>
</body>
</html>