<?php
	

	if(isset($_POST["nomeJogador"])) $nomeJogador=$_POST["nomeJogador"];
	else $nomeJogador = "";

	if(isset($_POST["codJogador"])) $codJogador=$_POST["codJogador"];
	else $codJogador = "";
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
			
			
			
			$sql = "update Jogadores set nomeJogador = '".$nomeJogador."'  where codJogador ='".$codJogador."' ";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{	
				header('Location: http://127.0.0.1/ELeague/paginas/verEquipe.php?codigoDaEquipe='.$codEquipe); 
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
			
			$sql = "delete from Jogadores where codJogador ='".$codJogador."' ";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/paginas/Equipes.php');
			}
			
			$db->close();
		}
        break;

    

    default:
        //no action sent
}
	
	?> 
