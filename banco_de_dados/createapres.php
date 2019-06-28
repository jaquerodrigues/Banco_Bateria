<?php
session_start();
include_once 'conexao.php';



$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);

$data = filter_input(INPUT_POST, 'data',FILTER_SANITIZE_STRING);


$querySelect = $link->query("select nome from apresentacao");
$array_nomes = [];

while($nomes = $querySelect->fetch_assoc()):
	$nomes_existentes = $nomes['nome'];
	array_push($array_nomes,$nomes_existentes);
endwhile;

if(in_array($nome, $array_nomes)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe uma apresentacao com esse nome.'."</p>";
	header("Location:../addapres.php");
else:
	$queryInsert = $link->query("insert into apresentacao values('$nome', '$data')");
	$affected_rows = mysqli_affected_rows($link);


	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!';
		header("Location:../addapres.php");
	endif;
endif;