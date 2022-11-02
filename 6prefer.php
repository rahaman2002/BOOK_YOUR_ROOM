<?php

include "2connect.php";

$aadhaar = $_POST['id'];
echo "<h3>Aadhaar Id : ". $aadhaar.'<br></h3>';

$room = $_POST['type'];
echo "<h3>Room Type : ". $room.'<br></h3>';

$cost = $_POST['money'];
echo "<h3>Cost of Room : ". $cost.'<br></h3>';

$in = $_POST['from'];
echo "<h3>From Date : ". $in.'<br></h3>';

$out = $_POST['to'];
echo "<h3>To Date : ". $out.'<br></h3>';

$var='Preferences.txt';
	$file=fopen($var,'w');
	fwrite($file,"$aadhaar \n");
	fwrite($file,"$room\n");
	fwrite($file,"$cost\n");
    fwrite($file,"$in\n");
    fwrite($file,"$out\n");
	fclose($file);

echo '<br><button><a  href="d.php">Download Your Preferences</a></button>';

$query2="insert into preferences VALUES('$aadhaar','$room','$cost','$in','$out');";
if(mysqli_query($connection,$query2)){
    echo "";
}
else{
    echo "error:".mysqli_error($connection);
}
?>