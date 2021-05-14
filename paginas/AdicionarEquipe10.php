<?php
  if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

$nomeEquipe1 = $_POST["nomeEquipe1"];
$nomeEquipe2 = $_POST["nomeEquipe2"];
$nomeEquipe3 = $_POST["nomeEquipe3"];
$nomeEquipe4 = $_POST["nomeEquipe4"];
$nomeEquipe5 = $_POST["nomeEquipe5"];
$nomeEquipe6 = $_POST["nomeEquipe6"];
$nomeEquipe7 = $_POST["nomeEquipe7"];
$nomeEquipe8 = $_POST["nomeEquipe8"];
$nomeEquipe9 = $_POST["nomeEquipe9"];
$nomeEquipe10 = $_POST["nomeEquipe10"];
$anoEventoEquipe = $_SESSION['anoDoEvento'];

	$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
				$consulta = $conecta->query("select * from Campeonato where anoEvento = '".$anoEventoEquipe."'");
					if($consulta -> execute()){ // sucesso ao executar sql?
						if ($consulta -> rowCount() > 0){ // há informações?	   
							while ($campo = $consulta -> fetch (PDO::FETCH_OBJ)){
								$FK = $campo -> idCamp;
							}
						}
					}// percorre consulta

		$db = new mysqli ("localhost", "root", '', "Campeonato");
		
		if ($db -> connect_error > 0)
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{
			
			$sql = "insert into Equipes (nomeEquipe, anoEquipe, FK_idCamp, logotipo) values 
									('$nomeEquipe1','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe2','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe3','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe4','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe5','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe6','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe7','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe8','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe9','$anoEventoEquipe', '$FK', ''),
									('$nomeEquipe10','$anoEventoEquipe', '$FK', '')";
								
			
			if(!$result = $db -> query($sql))
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			
			}else
			{
            		header('Location: http://127.0.0.1/ELeague/paginas/Campeonatos.php');
			}
			
			$db->close();
		}	
	?> 
