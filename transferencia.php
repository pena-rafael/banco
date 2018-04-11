<?php
	$t = "Transferência";
	include("sessao.php");
	if(isset($_POST["transferencia"])) {
		$dinheiro_negativo = $_POST["transferencia"] * -1;
		if(busca_usuario($_POST["login_transf"])) {
			atribuir_saldo($_SESSION["login"], $dinheiro_negativo);
			atribuir_saldo($_POST["login_transf"], $_POST["transferencia"]);
		}
	}
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
		if(isset($_GET["erro"])) {
			echo "Impossivel completar a transferência";
		} else if(isset($_POST["transferencia"])) {
			echo "Transferência efetuada com sucesso";
		} else {
?>
			<form name="transferencia" method="post" action="transferencia.php">
				<div>
					<div class="sessao">
						<label> Qual o valor da transferência? </label>
						<input type="number" name="transferencia" />
					</div>
						
					<div class="sessao">
						<label> Para quem você deseja transferir? </label>
						<input type="text" name="login_transf" placeholder="Insira o login" />
					</div>
				</div>
					
				<input type="submit" value="Transferir"/>
			</form>
<?php 
		}
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>