<?php
session_start();
include_once 'conexao.php';

//$nome = $_POST['nome'];

$nomebreque = filter_input(INPUT_POST, 'nomebreque',FILTER_SANITIZE_SPECIAL_CHARS);
//hmm aqui deveria pegar só os numeros?
$nomeapres = filter_input(INPUT_POST, 'nomeapres',FILTER_SANITIZE_STRING);
//$ano_ingresso = $_POST['ano_ingresso'];

$querySelect = $link->query("select nome from apresentacao");
$array_nomesapres = [];

while($nomes = $querySelect->fetch_assoc()):
	$nomes_existentes = $nomes['nomeapres'];
	array_push($array_nomesapres,$nomes_existentes);
endwhile;


if(in_array($nomeapres, $array_nomesapres)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Não existe uma apresentação com esse nome.'."</p>";
	header("Location:../addbreqeapres.php");
else:
	$queryInsert = $link->query("insert into apresentacaobreque values('$nomeapres','$nomebreque')");
	$affected_rows = mysqli_affected_rows($link);
	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!';
		header("Location:../addbreqeapres.php");
	endif;
endif;