<?php 
	session_start();
	include("funcoes.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> <?php echo $t; ?> </title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1> Banco Isa & Rafa </h1>
			<nav>
				<ul>
					<li><a href="index.php"> Início </a></li>
					<?php if(!isset($_SESSION["login"])){ ?>
						<li><a href="login.php"> Login </a></li>
					<?php } else { ?>
						<li><a href="saque.php"> Saque </a></li>
						<li><a href="deposito.php"> Depósito </a></li>
						<li><a href="transferencia.php"> Transferência </a></li>
						<li><a href="logout.php"> Sair </a></li>
					<?php } ?>
				</ul>
			</nav>
			<?php if(isset($_SESSION["login"])){ ?>
				<p> Seu saldo é: 1000000 </p>
			<?php } ?>
		</header>
		<content>