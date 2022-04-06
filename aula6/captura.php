<?php
	$nome = "";
	$ra = "";

	// MÉTODO GET
	$nome = $_GET['txt_nome'];
	$ra = $_GET['txt_ra'];
	echo "Página de captura (GET):<br>";
	echo "<br>Nome do aluno = " . $nome;
	echo "<br>RA do aluno = " . $ra;
	//	https://<servidor>/captura.php?txt_nome=Daniel&txt_ra=123456
	echo "<br><br>";

	// MÉTODO POST
	$nome = $_POST['txt_nome'];
	$ra = $_POST['txt_ra'];
	echo "Página de captura (POST):<br>";
	echo "<br>Nome do aluno = " . $nome;
	echo "<br>RA do aluno = " . $ra;

	//	nome = $_REQUEST['txt_nome'];

	//	Criar
	//	setcookie(nome*, valor*, tempo, diretorio, dominio, seguro)
	$valor = $_COOKIE['exemplo'];

	echo "<br>Valor do cookie = ". $valor;
?>