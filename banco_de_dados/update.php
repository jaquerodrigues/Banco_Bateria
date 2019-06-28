<?php 
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome		  = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$ano_ingresso = filter_input(INPUT_POST, 'ano_ingresso',FILTER_VALIDATE_INT);
$apelido 	  = filter_input(INPUT_POST, 'apelido',FILTER_SANITIZE_STRING);
$instrumento  = filter_input(INPUT_POST, 'instrumento',FILTER_SANITIZE_STRING);

$queryUpdate = $link->query("update ritmista set nome='$nome',ano_ingresso='$ano_ingresso',apelido='$apelido',instrumento='$instrumento' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
	header("Location:../consultas.php");
endif;
