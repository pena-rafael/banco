<?php
	$t = "Depósito";
	include("sessao.php");
	if(isset($_POST["deposito"])) {
		atribuir_saldo($_SESSION["login"], $_POST["deposito"]);
	}
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
		if(isset($_POST["deposito"])) {
			echo "Depositado com sucesso!";
		} else {
?>
			<form name="deposito" method="post" action="deposito.php">
				<div>
					<div class="sessao">
						<label> Qual o valor do depósito? </label>
						<input type="number" min="0.01" step="0.01" name="deposito" />
					</div>
				</div>
					
				<input type="submit" value="Depositar"/>
			</form>
<?php 
		}
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>