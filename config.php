<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "cse_25";

$conn = new mysqli($serverName, $userName, $password, $dbName);
 if($conn->connect_error){
     die("Connecttion Failed : " . $conn->connect_error);
 }


?>