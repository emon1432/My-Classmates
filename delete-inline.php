<?php
echo $roll = $_GET['roll'];
session_start();
echo $section = $_SESSION["sec"];
include 'config.php';
if ($section == "sec_a") {
    $sql = "DELETE FROM sec_a WHERE Roll={$roll}";
} else {
    $sql = "DELETE FROM sec_b WHERE Roll={$roll}";
}
$result = $conn->query($sql) or die("Query Ubsuccessful!!!");
header('Location: http://localhost/CRUD/index.php');
$conn->close();
?>