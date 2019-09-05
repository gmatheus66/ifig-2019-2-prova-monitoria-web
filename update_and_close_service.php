<?php

require_once 'config.php';

if (!is_logged()) {
    header('location: index.php');
    exit();
}

if (!isset($_POST['solution']) || !isset($_GET['id'])) {
    header('location: home.php');
    exit();
}

$id       = $_GET['id'];
$solution = $_POST['solution'];

$stmt = $pdo-> prepare('
    UPDATE  services
    SET     solution = ?,
            is_open = 0
    WHERE   id = ?
');
$stmt -> bindParam(1, $solution);
$stmt -> bindParam(2, $id);
$stmt -> execute();


header('location: home.php');


?>