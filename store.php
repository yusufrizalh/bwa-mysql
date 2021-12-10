<?php
include("./database/config.php");

$emp_name = $_POST['emp_name'];
$emp_email = $_POST['emp_email'];

$sql = "INSERT INTO employee(emp_name, emp_email) VALUES(:emp_name, :emp_email)";
$query = $dbConnection->prepare($sql);
$query->bindParam(':emp_name', $emp_name);
$query->bindParam(':emp_email', $emp_email);
$query->execute();
$dbConnection = null;

echo ("<script>window.alert('Employee data is saved!');window.location.href='./index.php'</script>");
