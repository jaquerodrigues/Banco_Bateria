<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from ritmista");

while($registros = $querySelect->fetch_assoc()):
	$id = $registros['id'];
	$nome = $registros['nome'];
	$ano_ingresso = $registros['ano_ingresso'];
	$apelido = $registros['apelido'];
	$instrumento = $registros['instrumento'];

	echo "<tr>";
	echo "<td>$nome</td><td>$ano_ingresso</td><td>$apelido</td><td>$instrumento</td><td><a href='editar.php?id=$id'><i class='material-icons' color='black'>edit</a></i></td><td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></td>";
	echo "</tr>";

endwhile;
