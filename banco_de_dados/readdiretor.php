<?php

include_once 'conexao.php';

$querySelect = $link->query("select nome, diretor.apelido 
							from diretor, ritmista 
							where ritmista.id=diretor.id");

while($registros = $querySelect->fetch_assoc()):
	$nome = $registros['nome'];
	$apelido = $registros['apelido'];

	echo "<tr>";
	echo "<td>$nome</td>";
	echo "<td>$apelido</td>";
	echo "</tr>";

endwhile;
