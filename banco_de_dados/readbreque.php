<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from breque");

while($registros = $querySelect->fetch_assoc()):
	$nome = $registros['nome'];
	$duracao = $registros['duracao'];
	$dificuldade = $registros['dificuldade'];

	echo "<tr>";
	echo "<td>$nome</td><td>$duracao</td><td>$dificuldade</td>";
	echo "</tr>";

endwhile;
