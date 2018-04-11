<?php
	$t = "Cadastro";
	include("sessao.php");
	include("cabecalho.php");
	
	if(!isset($_SESSION["login"])){
		if(isset($_POST["nome"])) {
			$arquivo = "arquivos/usuarios.xml";
			if(!file_exists($arquivo)) {
				$fp = fopen($arquivo, "w");
				$conteudo = '<?xml version="1.0"?><usuarios></usuarios>';
				fwrite($fp,$conteudo);
				fclose($fp);
			}
			$xml = simplexml_load_file($arquivo);
			$nova_posicao = sizeof($xml->usuario);
			
			$xml->usuario[$nova_posicao]->login = $_POST["login"];	
			$xml->usuario[$nova_posicao]->senha = $_POST["senha"];
			$xml->usuario[$nova_posicao]->email = $_POST["email"];
			$xml->usuario[$nova_posicao]->nome = $_POST["nome"];
			$xml->usuario[$nova_posicao]->data_nasc = $_POST["data_nasc"];
			$xml->usuario[$nova_posicao]->saldo = 0;
			
			$xml->asXML($arquivo);
			
			echo "<h2>Cadastrado com sucesso!</h2>";
		} else {
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
		}
	} else {
		echo "Permissão negada";
	}
	include("rodape.php");
?>