<?php
include 'customer_session.php';
include 'connect_db.php';
include 'navbar_c.php';
?>
<?php
  if(isset($_POST["order_status"]))
  {
    header('Location: /SWE/customer_status.php');
  }
  else if(isset($_POST["order_create"]))
  {
    header('Location: /SWE/customer_create_order.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>NEWS TORRENT #NOT PIRATED</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
table, th, td {
  border-collapse: collapse;
  border-bottom: 1px solid #ddd;
  text-align:left;
  padding: 12px;
}
tr{background-color: #f2f2f2;}
tr:hover{background:rgba(0,255,0,0.3);}
th {
  background-color: rgba(0,0,255,0.7);
  color: white;
}
button{
  background-color: white;
  border:2px solid #f44336;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button:hover{
  background-color:#f44336;
  color:white;
}
#first_btn{
    background:#4CAF50;
    border: none;
    color: white;
}
#first_btn:hover{
  background:white;
  border:2px solid #4CAF50;
  color:black;
}
h1{
  font-size:50px;
  
}
.open-button{
  position:fixed;
  top:600px;
  left:1200px;
  border:2px solid purple;
}
.open-button:hover{
  background:purple;
}
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-container {
  max-width: 200px;
  padding: 10px;
  max-height:700px;
  background-color: white;
}
.form-container textarea {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 50px;
}
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 17px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
#msgs div:nth-child(even){background:pink;}
#msgs div:nth-child(odd){background:grey;color:white}
body{
  background:rgb(255,255,255) url("images/bgimg.jpg") fixed center;
}
</style>

</head>
<body>
<?php
$cust_id = $_SESSION['cust_id'];
$sql = "SELECT * FROM customer where userId = '$cust_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<h1><center>Hi &#128075;, ".$row["name"].'</center></h1>';
?>
<p></p>
<form action="#" method="post">
  <button id = "first_btn" name="order_status" value="123">Check your order status &#8987; </button>
</form>
<h2>Our Vendors &#128071; [You can order your daily newspaper here!]</h2>
<form action="/SWE/customer_create_order.php" method="post">
<table  style="width:100%">
  <tr>
      <th>Vendor ID</th>
      <th>Newspaper</th> 
      <th>Cost per Paper</th>
      <th>Cost per month</th>
      <th>Three months cost</th>
      <th>Yearly cost</th>
      <th>Lang</th>
      <th>Order Now!</th>
  </tr>
    <?php
    $sql2 = "SELECT * FROM vendor";
    $result1 = $conn->query($sql2);
    while($row1 = $result1->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row1['vendor_id']."</td>";
      echo "<td>".$row1['paper_name']."</td>";
      echo "<td>".$row1['costOfOne']."</td>";
      echo "<td>".$row1['monthly']."</td>";
      echo "<td>".$row1['three_months']."</td>";
      echo "<td>".$row1['yearly']."</td>";
      echo "<td>".$row1['lang'].'</td>';
      echo "<td><button name='vendor_id' value='".$row1['vendor_id']."'>Order Now</button></td>";
      echo "</tr>";
    }
    ?>
</table>
</form>
<button class="open-button" onclick="openForm()"><i class="fas fa-robot"></i></button>
<div class="chat-popup" id="myForm">
  <div class="form-container">
    <h3>Chat Bot</h3>
    <div id = "msgs"></div>
    <textarea placeholder="Type message.." name="msg" required id="txtarea"></textarea>

    <button type="button" class="btn" id = "send"><i class="fas fa-paper-plane"></i></button>
    <button type="button" class="btn cancel" onclick="closeForm()"><i class="fas fa-window-close"></i></button>
  </div>
</div>
<script>
let sendBtn = document.getElementById("send");
let msgDiv = document.getElementById("msgs");
let txtarea = document.getElementById("txtarea");
sendBtn.onclick=()=>{
 let text = txtarea.value;
 let q = encodeURIComponent(text);
 let uri = 'https://api.wit.ai/message?q=' + q;
 const auth = 'Bearer  DGXL6RGJF5JKOUTZSNQ4F5KOCAP525E4'
 response(uri,auth);
 let outdiv = document.createElement("DIV");
 outdiv.innerHTML = text;
 msgDiv.appendChild(outdiv);
 txtarea.value="";
}
async function response(uri,auth){
  const a = await fetch(uri, {headers: {Authorization: auth}});
  const data = await a.json();
  console.log(data.entities["Greeting"]);
  if(data.intents[0].name=="help"){
    let outdiv = document.createElement("DIV");
 outdiv.innerHTML = "Please check the available newspapers given on this page";
 msgDiv.appendChild(outdiv);
 txtarea.value="";
  }

}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>