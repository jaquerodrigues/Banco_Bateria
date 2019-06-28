<?php
session_start();
include_once 'conexao.php';

//$nome = $_POST['nome'];

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
//hmm aqui deveria pegar só os numeros?
$duracao = filter_input(INPUT_POST, 'duracao',FILTER_SANITIZE_STRING);
//$ano_ingresso = $_POST['ano_ingresso'];
$dificuldade = filter_input(INPUT_POST, 'dificuldade',FILTER_SANITIZE_STRING);
//$apelido = $_POST['apelido'];

$querySelect = $link->query("select nome from breque");
$array_nomes = [];

while($nomes = $querySelect->fetch_assoc()):
	$nomes_existentes = $nomes['nome'];
	array_push($array_nomes,$nomes_existentes);
endwhile;

if(in_array($nome, $array_nomes)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um breque com esse nome.'."</p>";
	header("Location:../addbreque.php");
else:
	$queryInsert = $link->query("insert into breque values('$nome','$duracao','$dificuldade')");
	$affected_rows = mysqli_affected_rows($link);


	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!';
		header("Location:../addbreque.php");
	endif;
endif;