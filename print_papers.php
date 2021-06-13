<?php
include 'connect_db.php';
include 'navbar_vp.php';
include 'vendor_session.php';

$vendor_id = $_SESSION['vendor_id'];
$mydate=getdate(date("U"));
$tomo = $mydate['mday'];
$ct = 0;
$tomo = $tomo+0;
$sql = "SELECT * FROM orders where vendor_id = $vendor_id";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) {
	$d = $row['from_date'];
	$k = explode("-",$d);
	$g = $k[0]-1;
	if($tomo == $g)
	{
		$ct++;
	}
}
echo "<center><h2>Total Newspapers to be printed tomorrow:</h2>";
echo "<div id='total_np'><h1><span class='a'>$ct</span> NewsPaper(s)!</h1><br><br><br>";
echo "<h4>Since, the Number of newpapers is subject to change, page will refresh itself for every 2 seconds</h4></div>";
header( "refresh:2	;url=/SWE/print_papers.php" );
?>

<!DOCTYPE html>
<html>
<head>
	<title>NEWS TORRENT #NOT PIRATED</title>
	<style type="text/css">
		h2{
			font-family:'algerian';
			text-shadow:1px 1px 3px black;
		}
		.a{
			color:blue;
		}
		body{
	background:linear-gradient(90deg,white,rgba(0,255,255,0.5),rgba(128,0,128,0.5));
}
		#total_np{
			padding: 5px 10px;
      border-radius: 2px 35px;
      box-shadow:3px 3px 6px black;
      border:2px dashed grey;
  	width:30vw;
 	 height:70vh;
  	background:white;
  	overflow:auto;
  	margin-left:10vw;
		}
		img{
			width:400px;
			height:400px;
			position:fixed;
			left:3vw;
			top:26vh;
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
<img src="images/news_del_guy.png"></img>
</body>
</html>