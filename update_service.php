<?php

require_once 'config.php';

if (!is_logged()) {
    header('location: index.php');
    exit();
}

if (!isset($_POST['client-id']) || !isset($_POST['equip']) || !isset($_POST['problem']) || !isset($_GET['id']) ) {
    header('location: home.php');
    exit();
}

$id        = $_GET['id'];
$client_id = $_POST['client-id'];
$equip     = $_POST['equip'];
$problem   = $_POST['problem'];

$stmt = $pdo->prepare('
    UPDATE  services
    SET     client_id = ?,
            equip = ?,
            problem = ?
    WHERE   id = ?
');
$stmt -> bindParam(1, $client_id);
$stmt -> bindParam(2, $equip);
$stmt -> bindParam(3, $problem);
$stmt -> bindParam(4, $id);
$stmt -> execute();


header('location: home.php');


?>