<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<div class="row container">
	<div class="col s12">
		<div class="section">
		<legend><img src="imagens/consulta.png" alt="50" width="50"></legend>
		<h5 class="light">Lista de Apresentação</h5><hr></div>

		<table class="stripped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Data</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'banco_de_dados/readapres.php';
				?>

				
			</tbody>
		</table>
	</div>	
</div>


 <?php include_once 'includes/footer.inc.php' ?>