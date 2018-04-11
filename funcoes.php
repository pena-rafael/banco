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
?>