<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
		 <!--Formulário de Cadastro -->
		 <div class="row container">
		 	<p>&nbsp</p>
		 	<form action="banco_de_dados/createbreque.php" method="post" class="col s12">
		 		<fieldset class="formulario"> 
		 			<legend><img src="imagens/logonaumteria.png" alt="(imagem)" width="100"></legend>
		 			<h5 class="light center">Cadastro de Breques</h5>

		 			<?php 
		 				if(isset($_SESSION['msg'])):
		 					echo $_SESSION['msg'];
		 					session_unset();
		 				endif;
		 			?>

		 			<!--campo nome -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">audiotrack</i>
		 				<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
		 				<label for="nome">Nome</label>
		 			</div>

		 			<!--campo DURAÇÃO -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">access_time</i>
		 				<input type="text" name="duracao" id="duracao" maxlength="15" required>
		 				<label for="duracao">Duração</label>
		 			</div>

		 			<!--campo DIFICULDADE -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">assessment</i>
		 				<input type="text" name="dificuldade" id="dificuldade" maxlength="15" required>
		 				<label for="dificuldade">Dificuldade</label>
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