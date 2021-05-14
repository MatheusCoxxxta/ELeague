<?php
$novoJogador = $_POST['novoJogador'];
$codEquipe = $_POST['codEquipe'];
		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "insert into Jogadores (nomeJogador, FK_codEquipe) values 
									('$novoJogador','$codEquipe')";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/paginas/verEquipe.php?codigoDaEquipe='.$codEquipe);
			}
			
			$db->close();
		}	
?> 
