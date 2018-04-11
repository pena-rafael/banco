<?php
function autentica() {
	$arquivo = "arquivos/usuarios.xml";
	if(file_exists($arquivo)) {
		$xml = simplexml_load_file($arquivo);
		foreach($xml->usuario as $i=>$v) {
			if($v->login == $_POST["login"] && $v->senha == $_POST["senha"]) {
				$_SESSION["login"] = $_POST["login"];
				header("location: index.php");
			}
		}
	}
}
function logout() {
	if(isset($_SESSION["login"])) {
		session_destroy();
		header("location: logout.php");
		//echo "<script>location.reload()</script>";
	}
}
function busca_saldo($login) {
	$arquivo = "arquivos/usuarios.xml";
	if(file_exists($arquivo)) {
		$xml = simplexml_load_file($arquivo);
		foreach($xml->usuario as $i=>$v) {
			if($v->login == $login) {
				$saldo = $v->saldo;
				return($saldo);
			}
		}
	}
}
function atribuir_saldo($login, $dinheiro) {
	$arquivo = "arquivos/usuarios.xml";
	if(file_exists($arquivo)) {
		$xml = simplexml_load_file($arquivo);
		foreach($xml as $i=>$v) {
			//print_r($v->login);
			//print_r($_SESSION["login"]);
			$login_string = (string) $v->login;
			if($login_string == $login) {
				$saldo_float = (float) $v->saldo;
				//print_r($dinheiro);
				if(($saldo_float + $dinheiro)<=0) {
					header("location: ?erro=1");
				} else {
					$v->saldo = $saldo_float + $dinheiro;
					$xml->asXML($arquivo);
				}
				break;
			}
		}
	}
}
function busca_usuario($login) {
	$arquivo = "arquivos/usuarios.xml";
	if(file_exists($arquivo)) {
		$xml = simplexml_load_file($arquivo);
		foreach($xml->usuario as $i=>$v) {
			if($v->login == $login) {
				return(true);
			}
		}
	}
	header("location: ?erro=1");
	return(false);
}
?>