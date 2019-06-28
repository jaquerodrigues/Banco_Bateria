<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
 
<div class="row container">
	<div class="col s12">
		<legend><img src="imagens/consulta.png" alt="50" width="50"></legend>
		<h5 class="light">Consultas de Breque em Apresentações</h5><hr>

		<form name="frmBusca" method="post" action="buscabrequeapres.php" >
    		<input type="text" name="palavra" />
    		<input type="submit"  value="Buscar" class="btn blue" />
    		<label for="palavra">Digite a apresentação que gostaria de pesquisar</label>
		</form>

		<table class="stripped">
			<thead>
				<tr>
					<th>Nome da Apresentação</th>
					<th>Nome do Breque</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'banco_de_dados/readbrequeapres.php';
				?>

				
			</tbody>
		</table>
	</div>	
</div>


 <?php include_once 'includes/footer.inc.php' ?>