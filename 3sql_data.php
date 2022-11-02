<?php
include "2connect.php";

$name = $_POST['name'];

$aadhaar = $_POST['uadai'];

$mob = $_POST['mobile'];



$query2="insert into users VALUES('$name','$aadhaar','$mob')";
if(mysqli_query($connection,$query2)){
    echo "";
}
else{
    echo "error:".mysqli_error($connection);
}

include "4rooms.html";
?>