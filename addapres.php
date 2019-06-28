<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

		 <!--Formulário de Cadastro -->
		 <div class="row container">
		 	<p>&nbsp</p>
		 	<form action="banco_de_dados/createapres.php" method="post" class="col s12">
		 		<fieldset class="formulario"> 
		 			<legend><img src="imagens/logonaumteria.png" alt="(imagem)" width="100"></legend>
		 			<h5 class="light center">Cadastro de Apresentação</h5>

		 			<?php 
		 				if(isset($_SESSION['msg'])):
		 					echo $_SESSION['msg'];
		 					session_unset();
		 				endif;
		 			?>

		 			<!--campo nome -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">perm_media</i>
		 				<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
		 				<label for="nome">Nome</label>
		 			</div>

		 			<!--campo DATA -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">event</i>
		 				<input type="text" name="data" id="data" maxlength="15" required>
		 				<label for="data">Data</label>
		 			</div>

		 			<!-- Botões -->
		 			<div class="input-field col s12">
		 				<input type="submit" value="cadastrar" name="botao_cadastro" class="btn yellow">
		 				<input type="reset" value="limpar" class="btn red">
		 			</div>

		 		</fieldset>
		 	</form>
		 </div>

<?php include_once 'includes/footer.inc.php' ?>