<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

<div class="row container">
	<div class="col s12">
		<legend><img src="imagens/consulta.png" alt="50" width="50"></legend>
		<h5 class="light">Consultas de Breque</h5><hr>

		<form name="frmBusca" method="post" action="buscabreque.php" >
    		<input type="text" name="palavra" />
    		<input type="submit"  value="Buscar" class="btn blue" />
    		<label for="palavra">Digite o breque que gostaria de pesquisar</label>
		</form>

		<table class="stripped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Duração</th>
					<th>Dificuldade</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'banco_de_dados/readbreque.php';
				?>

				
			</tbody>
		</table>
	</div>	
</div>


 <?php include_once 'includes/footer.inc.php' ?>