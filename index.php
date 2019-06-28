<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
		 <!--Formulário de Cadastro -->
		 
		 <div class="row container">
		 	<p>&nbsp</p>
		 	<form action="banco_de_dados/create.php" method="post" class="col s12">
		 		<fieldset class="formulario">
		 			
		 			<legend><img src="imagens/logonaumteria.png" alt="(imagem)" width="100"></legend>
		 			<div class="nav">
		 			<h5 class="light left">Cadastro de Ritmistas</h5></div>

		 			<?php 
		 				if(isset($_SESSION['msg'])):
		 					echo $_SESSION['msg'];
		 					session_unset();
		 				endif;
		 			?>

		 			<!--campo nome -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">account_circle</i>
		 				<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
		 				<label for="nome">Nome</label>
		 			</div>

		 			<!--campo Ano de inGRESSO -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">access_time</i>
		 				<input type="text" name="ano_ingresso" id="ano_ingresso" maxlength="15" required>
		 				<label for="ano_ingresso">Ano de Ingresso</label>
		 			</div>

		 			<!--campo apelido -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">face</i>
		 				<input type="text" name="apelido" id="apelido" maxlength="50" required>
		 				<label for="apelido">Apelido</label>
		 			</div>

		 			<!--campo instrumento -->
		 			<div class="input-field col s12">
		 				<i class="material-icons prefix">gps_not_fixed</i>
		 				<input type="text" name="instrumento" id="instrumento" maxlength="40" required>
		 				<label for="instrumento">Instrumento</label>
		 			</div>

		 				<div class="input-field col s12">
		 				<i class="material-icons prefix">event_seat</i>
		 				<input type="text" name="diretor" id="diretor" maxlength="5" required>
		 				<label for="diretor">É diretor?</label>
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