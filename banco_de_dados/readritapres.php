<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from apresentacaoritmista");

while($registro = $querySelect->fetch_assoc()):
	$apelidoritmista = $registro['apelidoritmista'];
	$nomeapres = $registro['nomeapres'];

	echo "<tr>";
	echo "<td>$apelidoritmista</td><td>$nomeapres</td>";
	echo "</tr>";

endwhile;
