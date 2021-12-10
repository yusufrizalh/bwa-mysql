<?php
include("./database/config.php");

$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$emp_email = $_POST['emp_email'];
$emp_hire_date = $_POST['emp_hire_date'];

$sql = "UPDATE employee SET emp_name=:emp_name, emp_email=:emp_email, emp_hire_date=:emp_hire_date WHERE emp_id=:emp_id";
$query = $dbConnection->prepare($sql);
$query->bindParam(':emp_id', $emp_id);
$query->bindParam(':emp_name', $emp_name);
$query->bindParam(':emp_email', $emp_email);
$query->bindParam(':emp_hire_date', $emp_hire_date);
$query->execute();
$dbConnection = null;

echo ("<script>window.alert('Employee data is updated!');window.location.href='./index.php'</script>");
