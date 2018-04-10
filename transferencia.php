<?php
	$t = "Transferência";
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
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
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>