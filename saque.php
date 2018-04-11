<?php
	$t = "Saque";
	include("sessao.php");
	if(isset($_POST["saque"])) {
		$dinheiro = $_POST["saque"] * -1;
		atribuir_saldo($_SESSION["login"], $dinheiro);
	}
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
		if(isset($_GET["erro"])) {
			echo "Impossivel completar o saque";
		} else if(isset($_POST["saque"])) {
			echo "Saque efetuado com sucesso";
		} else {
?>
			<form name="saque" method="post" action="saque.php">
				<div>
					<div class="sessao">
						<label> Qual o valor do saque? </label>
						<input type="number" min="0.01" step="0.01" name="saque" />
					</div>
				</div>
				
				<input type="submit" value="Sacar"/>
			</form>
<?php 
		}
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>