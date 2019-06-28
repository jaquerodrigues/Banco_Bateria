<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>


<div class="row container">
	<div class="col s12">
		<legend><img src="imagens/consulta.png" alt="50" width="50"></legend>
		<h5 class="light">Consultas</h5><hr>

		<form name="frmBusca" method="post" action="busca.php" >
    		<input type="text" name="palavra" />
    		<input type="submit"  value="Buscar" class="btn" />
    		<label for="palavra">Digite o instrumento que gostaria de pesquisar</label>
		</form>

		<table class="stripped">
			<thead>
				<tr>

					<th>Nome</th>
					<th>Ano de Ingresso</th>
					<th>Apelido</th>
					<th>Instrumento</th>
					<th>Editar</th>
					<th>Deletar</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'banco_de_dados/read.php';
				?>

				
			</tbody>
		</table>
	</div>	
</div>


 <?php include_once 'includes/footer.inc.php' ?>