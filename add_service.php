<?php

require_once 'config.php';

if (!is_logged()) {
    header('location: index.php');
    exit();
}

if (!isset($_POST['client-id']) || !isset($_POST['equip']) || !isset($_POST['problem'])) {
    header('location: home.php');
    exit();
}

$client_id = $_POST['client-id'];
$equip     = $_POST['equip'];
$problem   = $_POST['problem'];
$is_open = true;

$stmt = $pdo->prepare('INSERT INTO services (client_id, equip, problem, is_open) VALUES (?, ?, ?, ?)');
$stmt -> bindParam(1, $client_id);
$stmt -> bindParam(2, $equip);
$stmt -> bindParam(3, $problem);
$stmt -> bindParam(4, $is_open);
$stmt -> execute();


header('location: home.php');


?>