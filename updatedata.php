<?php
$roll = $_POST['sroll'];
$name = $_POST['sname'];
$gender = $_POST['gender'];
$blood_group = $_POST['blood_group'];
$phone = $_POST['sphone'];
session_start();
$section = $_SESSION["sec"];
include 'config.php';

if ($section == 'sec_a') {
    $sql = "UPDATE sec_a SET Name = '{$name}', Gender = '{$gender}', Blood_group='{$blood_group}', Phone_Number = '{$phone}' WHERE Roll={$roll}";
} else {
    $sql = "UPDATE sec_b SET Name = '{$name}', Gender = '{$gender}', Blood_group='{$blood_group}', Phone_Number = '{$phone}' WHERE Roll={$roll}";
}

$result = $conn->query($sql) or die("Query Ubsuccessful!!!");

header('Location: http://localhost/CRUD/index.php');

$conn->close();
?>

