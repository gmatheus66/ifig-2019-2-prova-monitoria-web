<?php

require_once  'config.php';


$name = $_POST['name'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];




$smt = $pdo -> prepare("INSERT INTO clients(name,cep,num,compl) values (?,?,?,?)");
$smt -> bindParam(1,$name);
$smt -> bindParam(2,$cep);
$smt -> bindParam(3, $numero);
$smt -> bindParam(4, $complemento);
$smt -> execute();


header('location: home.php');
?>