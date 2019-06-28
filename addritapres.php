<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

		 <!--Formulário de Cadastro -->
		 <div class="row container">
		 	<p>&nbsp</p>
		 	<form action="banco_de_dados/createritmistaapres.php" method="post" class="col s12">
		 		<fieldset class="formulario"> 
		 			<legend><img src="imagens/logonaumteria.png" alt="(imagem)" width="100"></legend>
		 			<h5>Cadastro de Ritmistas na Apresentação</h5>

		 			<?php 
		 				if(isset($_SESSION['msg'])):
		 					echo $_SESSION['msg'];
		 					session_unset();
		 				endif;
		 			?>

		 			<!--campo nome apresentacao -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">perm_media</i>
		 				<input type="text" name="nomeapres" id="nomeapres" maxlength="40" required autofocus>
		 				<label for="nomeapres">Nome da Apresentação</label>
		 			</div>

		 			<!--campo nome veterano -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">account_circle</i>
		 				<input type="text" name="apelidoritmista" id="apelidoritmista" maxlength="40" required>
		 				<label for="apelidoritmista">Apelido do Ritmista</label>
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