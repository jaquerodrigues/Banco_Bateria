<?php

include_once 'banco_de_dados/conexao.php';
//include_once 'consultas.php';
	$palavra = filter_input(INPUT_GET, 'palavra', FILTER_SANITIZE_STRING);
	
	$palavra = trim($_POST['palavra']);
					 
						// Verificamos no banco de dados produtos equivalente a palavra digitada
						$sql = mysqli_query($link,"SELECT * FROM apresentacaobreque WHERE nomeapres LIKE '%".$palavra."%' ORDER BY nomebreque");
					 
						// Descobrimos o total de registros encontrados
						$numRegistros = mysqli_num_rows($sql);
					 
						// Se houver pelo menos um registro, exibe-o
						include_once 'includes/header.inc.php';
						include_once 'includes/menu.inc.php';

						if ($numRegistros != 0) {
						
						
						//include_once 'banco_de_dados/read.php';
						$querySelect = $link->query("SELECT * FROM apresentacaobreque WHERE nomeapres LIKE '%".$palavra."%' ORDER BY nomebreque");
?>
						<table class="stripped">
						<thead>
							<tr>
								<th>Nome da Apresentação</th>
								<th>Nome do Breque</th>
								

							</tr>
						</thead>
<?php
						while($registros = $querySelect->fetch_assoc()):
							$nomeapres = $registros['nomeapres'];
							$nomebreque = $registros['nomebreque'];
							

								?>					
						
						<tbody> <?php

							echo "<tr>";
							echo "<td>$nomeapres</td><td>$nomebreque</td>";
							echo "</tr>";
						

endwhile; ?> <a href="consultabreqeapres.php" class="btn blue">Voltar</a>
<?php

						// Se não houver registros
						
						} else {
							echo "<tr>";
							echo "<td><p class='center red-text'>Nenhuma apresentação foi encontrada com o nome ".$palavra."</td>";
							?><a href="consultabreqeapres.php" class="btn blue">Voltar</a><?php 
						}
						include_once 'includes/footer.inc.php';
						?>