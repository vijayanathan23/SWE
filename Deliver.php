<?php
include 'connect_db.php';
$mydate=getdate(date("U"));
$tomo = $mydate['mday'];
$ct = 0;
$i =0;
$tomo = $tomo+0;
$newspaper = array();
$address = array();
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) {
	$d = $row['from_date'];
	$k = explode("-",$d);
	$g = $k[0]-1;
	if($tomo <= $g)
	{
		$vid = $row['vendor_id'];
		$sql1 = "SELECT * FROM vendor where vendor_id = $vid";
		$result1 = $conn->query($sql1);
		$row1=$result1->fetch_assoc();
		array_push($newspaper,$row1['paper_name']);
		array_push($address,$row['address']);
	}
}	
header( "Content-Type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=spreadsheet.xls" );
echo 'Newspaper Name' . "\t" . 'Address' . "\n";

for ($i=0; $i < count($newspaper); $i++) { 
	echo $newspaper[$i] . "\t" . $address[$i]  . "\n";
}
die();
?>