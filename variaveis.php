<html>
  <head>
    <title>PHP Teste V1</title>
  </head>
  <body>

	<h1>Texto em Html</h1>
	  
	<?php	
		
		/*	Comentário
			echo "Texto em PHP<br/>";	
		*/
		echo "Frase em PHP<br/>";	

		$dia = 8;
		$mes = 3;
		$ano = 2022;
		$data_Atual;	
		$nome = "Daniel";

		echo "Hoje é : ".$dia."/".$mes."/".$ano."<br/><br/>";
		
		$data_Atual  = "<b>";
		$data_Atual .= $dia;
		$data_Atual .= "/".$mes;
		$data_Atual .= "/".$ano;
		$data_Atual .= "<br/></b>";

		echo "Eu sou o: ".$nome;
		echo "<br/>Exemplo de data: ".$data_Atual; 		
		echo "soma = ".($dia + $mes);

		define("ANO_NASCIMENTO", 2001);
		echo "<br/>Ano de nascimento: ".ANO_NASCIMENTO;
		
	?> 
  
  </body>
</html>