<?php
	$t = "Login";
	include("cabecalho.php");
	
	if(!isset($_SESSION["login"])){
?>
		<form name="login" method="post" action="login.php">
			<div>
				<div class="sessao">
					<label> Login: </label>
					<input type="text" name="login"/>
				</div>
				
				<div class="sessao">
					<label> Senha: </label>
					<input type="password" name="senha"/>
				</div>
			</div>
			
			<input type="submit" value="Logar"/>
		</form>
		<p> Ainda não está cadastrado? <a href="cadastro.php"> Clique aqui. </a></p>
<?php
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>