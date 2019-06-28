<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from apresentacao ORDER BY data");

while($registro = $querySelect->fetch_assoc()):
	$nome = $registro['Nome'];
	$data = $registro['data'];

	echo "<tr>";
	echo "<td>$nome</td><td>$data</td>";
	echo "</tr>";

endwhile;
