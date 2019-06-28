<?php
session_start();
include_once 'conexao.php';



$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);

$ano_ingresso = filter_input(INPUT_POST, 'ano_ingresso',FILTER_VALIDATE_INT);

$apelido = filter_input(INPUT_POST, 'apelido',FILTER_SANITIZE_STRING);

$instrumento = filter_input(INPUT_POST, 'instrumento',FILTER_SANITIZE_STRING);

$diretor = filter_input(INPUT_POST, 'diretor',FILTER_SANITIZE_STRING);

$querySelect = $link->query("select apelido from ritmista");
$array_apelidos = [];

while($apelidos = $querySelect->fetch_assoc()):
	$apelidos_existentes = $apelidos['apelido'];
	array_push($array_apelidos,$apelidos_existentes);
endwhile;

if(in_array($apelido, $array_apelidos)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um ritmista com esse apelido.'."</p>";
	header("Location:../");
else:
	$queryInsert = $link->query("insert into ritmista values(default,'$nome','$ano_ingresso','$apelido','$instrumento','$diretor')");


	$affected_rows = mysqli_affected_rows($link);


	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!';
		header("Location:../");

	endif;
endif;

if (($diretor == 'sim' || $diretor == 'Sim') and $ano_ingresso == 2019):
		$_SESSION['msg'] = "<p class='center red-text'>".'Bixo nao pode ser diretor.'."</p>";
	header("Location:../");
endif;