<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php' ;
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>
	</div>
</div>

<?php 
	
	include_once 'banco_de_dados/conexao.php';
	$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from ritmista where id ='$id' ");

	while($registros = $querySelect->fetch_assoc()):
	//	$id = $registros['id'];
		$nome = $registros['nome'];
		$ano_ingresso = $registros['ano_ingresso'];
		$apelido = $registros['apelido'];
		$instrumento = $registros['instrumento'];
	endwhile;
?>


<!--Formulário de Cadastro -->
		 <div class="row container">
		 	<p>&nbsp</p>
		 	<form action="banco_de_dados/update.php" method="post" class="col s12">
		 		<fieldset class="formulario">
		 			<legend><img src="imagens/logonaumteria.png" alt="(imagem)" width="100"></legend>
		 			<h5 class="light center">Alterações de Dados</h5>

		 			<!--campo nome -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">account_circle</i>
		 				<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
		 				<label for="nome">Nome</label>
		 			</div>

		 			<!--campo Ano de inGRESSO -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">access_time</i>
		 				<input type="text" name="ano_ingresso" id="ano_ingresso" value="<?php echo $ano_ingresso ?>" maxlength="15" required>
		 				<label for="ano_ingresso">Ano de Ingresso</label>
		 			</div>

		 			<!--campo apelido -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">face</i>
		 				<input type="text" name="apelido" id="apelido" value= "<?php echo $apelido ?> "maxlength="50" required>
		 				<label for="apelido">Apelido</label>
		 			</div>

		 			<!--campo instrumento -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">gps_not_fixed</i>
		 				<input type="text" name="instrumento" id="instrumento" value= "<?php echo $instrumento ?> "maxlength="40" required>
		 				<label for="instrumento">Instrumento</label>
		 			</div>

		 			<!-- Botões -->
		 			<div class="input-field col s12">
		 				<input type="submit" value="alterar" name="botao_cadastro" class="btn yellow">
		 				<a href="consultas.php" class="btn red">Cancelar</a>
		 			</div>

		 		</fieldset>
		 	</form>
		 </div>

<?php include_once 'includes/footer.inc.php' ?>