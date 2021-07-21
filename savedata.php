<?php
 $section = $_POST['section'];
 $roll = $_POST['sroll'];
 $name = $_POST['sname'];
 $gender = $_POST['gender'];
 $blood_group = $_POST['blood_group'];
 $phone = $_POST['sphone'];


include 'config.php';

if ($section == 'sec_a') {
    $sql = "INSERT INTO sec_a(Roll,Name,Gender,Phone_Number,Blood_group) VALUES ('{$roll}','{$name}','{$gender}','{$phone}','{$blood_group}')";
} else if ($section == 'sec_b') {
    $sql = "INSERT INTO sec_b(Roll,Name,Gender,Phone_Number,Blood_group) VALUES ('{$roll}','{$name}','{$gender}','{$phone}','{$blood_group}')";
}

$result = $conn->query($sql) or die("Query Ubsuccessful!!!");

header('Location: http://localhost/CRUD/index.php');

$conn->close();
?>