<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from apresentacaobreque");

while($registro = $querySelect->fetch_assoc()):
	$nomeapres = $registro['nomeapres'];
	$nomebreque = $registro['nomebreque'];

	echo "<tr>";
	echo "<td>$nomeapres</td><td>$nomebreque</td>";
	echo "</tr>";

endwhile;
