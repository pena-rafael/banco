<?php
	$t = "Cadastro";
	include("cabecalho.php");
	
	if(!isset($_SESSION["login"])){
?>
		<form name="cadastro" method="post" action="cadastro.php">
			<div>
				<div class="sessao">
					<label> Nome Completo: </label>
					<input type="text" name="nome"/>
				</div>
				
				<div class="sessao">
					<label> Email: </label>
					<input type="email" name="email"/>
				</div>
				
				<div class="sessao">
					<label> Data de nascimento: </label>
					<input type="date" name="data_nasc"/>
				</div>
				
				<div class="sessao">
					<label> Login: </label>
					<input type="text" name="login"/>
				</div>
				
				<div class="sessao">
					<label> Senha: </label>
					<input type="password" name="senha"/>
				</div>
			</div>
			
			<input type="submit" value="Cadastrar"/>
		</form>
		<p> Já está cadastrado? <a href="login.php"> Clique aqui. </a></p>
<?php
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>