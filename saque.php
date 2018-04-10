<?php
	$t = "Saque";
	include("cabecalho.php");
	if(isset($_SESSION["login"])){
?>
	<form name="saque" method="post" action="saque.php">
		<div>
			<div class="sessao">
				<label> Qual o valor do saque? </label>
				<input type="number" name="saque" />
			</div>
		</div>
		
		<input type="submit" value="Sacar"/>
	</form>
<?php 
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>