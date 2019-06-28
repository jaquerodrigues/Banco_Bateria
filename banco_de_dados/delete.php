<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_SPECIAL_CHARS);
$ano_ingresso = filter_input(INPUT_POST, 'ano_ingresso',FILTER_VALIDATE_INT);
$diretor = filter_input(INPUT_POST, 'diretor',FILTER_SANITIZE_STRING);

if($ano_ingresso<2019):
	$queryDelete = $link->query("delete from veterano where id='$id'");
endif;
/*
if( ($diretor == 'sim' || $diretor == 'Sim')):
	/*$queryDelete = $link->query("delete from diretor where id='$id'");
	echo "Você não pode excluir um diretor ";
endif;*/

if($ano_ingresso=2019):
	$queryDelete = $link->query("delete from bixo where id='$id'");
endif;

$queryDelete = $link->query("delete from ritmista where id='$id'");

if(mysqli_affected_rows($link) > 0):
	header("Location:../consultas.php");
endif;