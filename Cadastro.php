<?php

$nomeCamp = $_POST["nomeCamp"];


$QuantEquipe = $_POST["QuantEquipe"];
$jogEquipe = $_POST["jogEquipe"];
$anoEvento = $_POST["anoEvento"];


		
		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "insert into Campeonato (nomeCamp, QuantEquipe, jogEquipe, anoEvento) values 
									('$nomeCamp', '$QuantEquipe', '$jogEquipe', '$anoEvento')";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
				$consulta = $conecta->prepare("select * from Campeonato where QuantEquipe = '".$QuantEquipe."'");
					if($consulta -> execute()){ // sucesso ao executar sql?
						if ($consulta -> rowCount() > 0){ // há informações?	   
							while ($campo = $consulta -> fetch (PDO::FETCH_OBJ)){// percorre consulta
								if($campo -> QuantEquipe == 6)
								{
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-6.html');
								}
								elseif($campo -> QuantEquipe == 8)
								{
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-8.html');
								} 
								elseif($campo -> QuantEquipe == 10)
								{
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-10.html');
								} 
								elseif($campo -> QuantEquipe == 12)
								{
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-12.html');
								} 
							}
						}
					}
			}
			
			$db->close();
		}	
	?> 
