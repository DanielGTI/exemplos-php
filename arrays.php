<html>
  <head>
    <title>PHP Teste V1</title>
  </head>
  <body>
	  
	<?php	

		//	ARRAY (VETOR)

		$valor_array = array();
		//$valor_array = array("Uninove", 2022);
		//		INDICE			  0         1
		
		//print_r($valor_array);
		$valor_array[1] = 2022;
		$valor_array[0] = "Uninove"; 
		$valor_array[] = "Teste";
		$valor_array[] = 10;
		//print_r($valor_array);
		
		echo("Universidade = ".$valor_array[0]."<br>");
		echo("Ano = ".$valor_array[1]);
		echo("<br>Valor = ".$valor_array[2]);
		echo("<br>Valor = ".($valor_array[1] + $valor_array[3]) );

		$aluno = array();

		$aluno["RA"]		= "45578325632";
		$aluno["Nome"] 		= "Daniel";
		$aluno["Curso"] 	= "CC + SI";
		$aluno["Semestre"]	= 6;

		echo("<br><br>");
		echo("Nome = ". $aluno['Nome']."<br>");
		echo("RA   = ". $aluno["RA"]."");

		echo("<br><br>");
		echo("<pre>Nome = ". $aluno['Nome']."<br>");
		echo("RA   = ". $aluno["RA"]."</pre>");



		// ARRAY MULTIDIMENCIONAL (MATRIZ)

		$cliente = array();

		//	CLIENTE 1
		$cliente["nome"][0] = "Leonardo";
		$cliente["CPF"][0] 	= "0123456789";

		//	CLIENTE 2
		$cliente["nome"][1] = "Lucas";
		$cliente["CPF"][1] 	= "456789321";

		//	EXEMPLO 1 
		echo ("Cliente: <b>". $cliente["nome"][0]."</b> (CPF = ". $cliente["CPF"][0].")" );

		echo("<br><br>");


		for($i=0; $i<=1; $i++){
			echo ("Cliente: <b>". $cliente["nome"][$i]."</b> (CPF = ". $cliente["CPF"][$i].")" );
			echo("<br>");
		}


	?>
  
  </body>
</html>
