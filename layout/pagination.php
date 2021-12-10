<?php

include_once("./database/config.php");

// pagination
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int) $_GET['per-page'] : 5;
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$employees = $dbConnection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM employee ORDER BY emp_id DESC LIMIT {$start}, {$perPage}");
$employees->execute();
$employees = $employees->fetchAll(PDO::FETCH_ASSOC);

$total = $dbConnection->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
$pages = ceil($total / $perPage);
