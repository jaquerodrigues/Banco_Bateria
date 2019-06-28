<?php
session_start();
include_once 'conexao.php';

//$nome = $_POST['nome'];

$apelidoritmista = filter_input(INPUT_POST, 'apelidoritmista',FILTER_SANITIZE_SPECIAL_CHARS);
//hmm aqui deveria pegar só os numeros?
$nomeapres = filter_input(INPUT_POST, 'nomeapres',FILTER_SANITIZE_STRING);
//$ano_ingresso = $_POST['ano_ingresso'];

$querySelect = $link->query("select apelido from veterano");
$array_nomes = [];

while($nomes = $querySelect->fetch_assoc()):
	$nomes_existentes = $nomes['nome'];
	array_push($array_nomes,$nomes_existentes);
endwhile;

if(!in_array($nome, $array_nomes)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Não existe um veterano com esse nome.'."</p>";
	header("Location:../addritapres.php");
else:
	$queryInsert = $link->query("insert into apresentacaoritmista values('$apelidoritmista','$nomeapres')");
	$affected_rows = mysqli_affected_rows($link);


	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!';
		header("Location:../addritapres.php");
	endif;
endif;