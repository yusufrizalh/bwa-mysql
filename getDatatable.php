<?php
include("./database/config.php");

$result = $dbConnection->prepare("SELECT * FROM employee ORDER BY emp_id ASC");
$result->execute();
$result = $result->fetchAll(PDO::FETCH_ASSOC);

$data = array();

foreach ($result as $row) {
    $data[] = array(
        "emp_id" => $row['emp_id'],
        "emp_name" => $row['emp_name'],
        "emp_email" => $row['emp_email'],
        "emp_hire_date" => $row['emp_hire_date'],
    );
}

// response json
echo json_encode($data);
