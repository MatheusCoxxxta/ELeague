<?php
	

	if(isset($_POST["novoNomeEquipe"])) $novoNomeEquipe=$_POST["novoNomeEquipe"];
	else $novoNomeEquipe = "";

	if(isset($_POST["codEquipe"])) $codEquipe=$_POST["codEquipe"];
	else $codEquipe = "";
	
	$submit=$_POST["submit"];
	switch ($submit) {
    case 'Alterar':
        //save article and keep editing
		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "update Equipes set nomeEquipe = '".$novoNomeEquipe."'  where codEquipe ='".$codEquipe."' ";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/Equipes.php');
			}
			
			$db->close();
		}	
        break;

    case 'Excluir':
        //save article and redirect
		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "delete from Equipes where codEquipe ='".$codEquipe."' ";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/Equipes.php');
			}
			
			$db->close();
		}
        break;

    

    default:
        //no action sent
}
	
	?> 
