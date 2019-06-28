<?php

include_once 'banco_de_dados/conexao.php';
//include_once 'consultas.php';
	$palavra = filter_input(INPUT_GET, 'palavra', FILTER_SANITIZE_STRING);
	
	$palavra = trim($_POST['palavra']);
					 
						// Verificamos no banco de dados produtos equivalente a palavra digitada
						$sql = mysqli_query($link,"SELECT * FROM ritmista WHERE instrumento LIKE '%".$palavra."%' ORDER BY nome");
					 
						// Descobrimos o total de registros encontrados
						$numRegistros = mysqli_num_rows($sql);
					 
						// Se houver pelo menos um registro, exibe-o
						include_once 'includes/header.inc.php';
						include_once 'includes/menu.inc.php';

						if ($numRegistros != 0) {
						
						
						//include_once 'banco_de_dados/read.php';
						$querySelect = $link->query("SELECT * FROM ritmista WHERE instrumento LIKE '%".$palavra."%' ORDER BY nome");
	?>

					<table class="stripped">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Ano de Ingresso</th>
								<th>Apelido</th>
								<th>Instrumento</th>

							</tr>
						</thead>
						<tbody> 

<?php
						while($registros = $querySelect->fetch_assoc()):
							$id = $registros['id'];
							$nome = $registros['nome'];
							$ano_ingresso = $registros['ano_ingresso'];
							$apelido = $registros['apelido'];
							$instrumento = $registros['instrumento'];

							echo "<tr>";
							echo "<td>$nome</td><td>$ano_ingresso</td><td>$apelido</td><td>$instrumento</td>";
							echo "</tr>";
						

							endwhile;
?>							 <a href="consultas.php" class="btn blue">Voltar</a>
<?php

						// Se não houver registros
						
						} else {
							echo "<tr>";
							echo "<td><p class='center red-text'>Nenhum instrumento foi encontrado com o nome ".$palavra."</td>";
							?><a href="consultas.php" class="btn blue">Voltar</a><?php 
						}
						include_once 'includes/footer.inc.php';
?>