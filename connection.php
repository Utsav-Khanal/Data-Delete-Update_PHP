<?php

$servername = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "multiple_checkbox";

//Connection Procedural connection


$conn = mysqli_connect($servername,$dbusername,$dbpass,$dbname);

if($conn)
{
    //echo "Connection Successfull";
}
else{
    echo "Connection Failed" .mysqli_connect_error();
}



?>