<?php
	$t = "Depósito";
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
?>
	<form name="deposito" method="post" action="deposito.php">
		<div>
			<div class="sessao">
				<label> Qual o valor do depósito? </label>
				<input type="number" name="deposito" />
			</div>
		</div>
			
		<input type="submit" value="Depositar"/>
	</form>
<?php 
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>