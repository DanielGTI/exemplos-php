<?php 
		setcookie('exemplo','COOKIE funcionando');
?>	
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
		function valores(){
			//$var = "Texto";
			$GLOBALS['var'] = "Texto Global";
			$GLOBALS['aula'] = "AV1 e AV2";
			$turma = "34";
			//print_r($var);
		}
		valores();
		print_r($var);
		echo("<br>(".$aula.")<br>");
		echo("<br>(".$turma.")<br>");

	/*
		//	MAIS EXEMPLOS:

		echo "Servidor = ". $_SERVER['SERVER_NAME'] . "<br>";
		echo "Nome host = " . $_SERVER['HTTP_HOST'] . "<br>";
		echo "Navegador = " . $_SERVER['HTTP_USER_AGENT']."<br>";
		echo "Porta do servidor = ". $_SERVER['SERVER_PORT']."<br>";
		echo "IP cliente = ". $_SERVER['REMOTE_ADDR'];
	*/
	?> 
	Método GET
  	<form method="get" action="captura.php">
		<label for="txt_nome">Nome:</label>
		<input type="text" name="txt_nome" id="txt_nome"><br>
		<label for="txt_ra">RA:</label>
		<input type="number"  name="txt_ra" id="txt_ra">
		<input type="submit" value="Enviar GET">
	</form>
	<br>*******************************<br>
	Método POST
	<form method="post" action="captura.php">
		<label for="txt_nome">Nome:</label>
		<input type="text" name="txt_nome" id="txt_nome"><br>
		<label for="txt_ra">RA:</label>
		<input type="number"  name="txt_ra" id="txt_ra">
		<input type="submit" value="Enviar POST">
	</form>
	  
  </body>
</html>