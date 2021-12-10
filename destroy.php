<?php
include("./database/config.php");

$emp_id = $_GET['emp_id'];

$sql = "DELETE FROM employee WHERE emp_id=:emp_id";
$query = $dbConnection->prepare($sql);
$query->execute(array(':emp_id' => $emp_id));
$dbConnection = null;

// echo ("<script>window.alert('Employee data is updated!');window.location.href='./index.php'</script>");
