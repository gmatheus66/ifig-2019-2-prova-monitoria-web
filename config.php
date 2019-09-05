<?php

session_start();

$db_user = 'userRani';
$db_pw = 'ranieri';
$db_dsn = 'mysql:host=localhost;dbname=web-2019-2';

global $pdo;

try{
    $pdo = new PDO($db_dsn, $db_user, $db_pw);
}
catch(PDOException $e){
    $e -> getMessage();
}

function is_logged() {
    return isset($_SESSION['user']);
}

?>