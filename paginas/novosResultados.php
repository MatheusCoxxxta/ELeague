<?php		
		
	$golsEquipe1 = $_POST["Gols1"];	
	$golsEquipe2 = $_POST["Gols2"];		
	$codConfronto = $_POST["codConfronto"];	 
	$resposta = array();
		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else
		{ 
			$sql = "update Confrontos SET equipe1Gols = '".$golsEquipe1."', equipe2Gols = '".$golsEquipe2."' where codConfronto = '".$codConfronto."'"; 
								
			if(!$result = $db -> query($sql))
			{
				$resposta[] = array("resultado"=>"Tivemos um erro para enviar");
			}
			else
			{
				$resposta[] = array("resultado"=>"Sucesso");
			}	
			
			print json_decode($resposta);
			
		$db -> close();
		}
?>