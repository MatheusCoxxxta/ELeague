<?php$nomeEquipe1 = $_POST["nomeEquipe1"];$nomeEquipe2 = $_POST["nomeEquipe2"];$nomeEquipe3 = $_POST["nomeEquipe3"];$nomeEquipe4 = $_POST["nomeEquipe4"];$nomeEquipe5 = $_POST["nomeEquipe5"];$nomeEquipe6 = $_POST["nomeEquipe6"];		$db = new mysqli ("localhost", "root", '', "Campeonato");				if ($db -> connect_error > 0)			die('Erro so tentar conectar [' . $db->connect_error . ']');		else{						$sql = "insert into Equipes (nomeEquipe) values 									('$nomeEquipe1'),									('$nomeEquipe2'),									('$nomeEquipe3'),									('$nomeEquipe4'),									('$nomeEquipe5'),									('$nomeEquipe6')";														if(!$result = $db -> query($sql))			{				die ("há um erro na execução da query [" . $db->error. "]");						}else			{            		header('Location: http://127.0.0.1/ELeague/Equipes.php');			}						$db->close();		}		?> 