<?php
	
	if(isset($_POST["idCamp"])) $idCamp=$_POST["idCamp"];
	else $idCamp = 0;
	$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "delete from Campeonato where idCamp ='".$idCamp."' ";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/Campeonatos.php');
			}
			
			$db->close();
		}	
	?> 
