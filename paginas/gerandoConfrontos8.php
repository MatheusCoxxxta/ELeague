<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

 $ano = $_SESSION['anoDoEvento'];



$equipe1 = $_POST["Equipe1"];
$equipe2 = $_POST["Equipe2"];
$equipe3 = $_POST["Equipe3"];
$equipe4 = $_POST["Equipe4"];
$equipe5 = $_POST["Equipe5"];
$equipe6 = $_POST["Equipe6"];
$equipe7 = $_POST["Equipe7"];
$equipe8 = $_POST["Equipe8"];

$codEquipe1 = $_POST["codEquipe1"];
$codEquipe2 = $_POST["codEquipe2"];
$codEquipe3 = $_POST["codEquipe3"];
$codEquipe4 = $_POST["codEquipe4"];
$codEquipe5 = $_POST["codEquipe5"];
$codEquipe6 = $_POST["codEquipe6"];
$codEquipe7 = $_POST["codEquipe7"];
$codEquipe8 = $_POST["codEquipe8"];

//Rodada numero 1

$rod1Jog1 = $equipe1. " x ". $equipe7;
$rod1Jog1Equipe1 = $codEquipe1;
$rod1Jog1Equipe2 = $codEquipe7;

$rod1Jog2 = $equipe4. " x ". $equipe2;
$rod1Jog2Equipe1 = $codEquipe4;
$rod1Jog2Equipe2 = $codEquipe2;

$rod1Jog3 = $equipe5. " x ". $equipe3;
$rod1Jog3Equipe1 = $codEquipe5;
$rod1Jog3Equipe2 = $codEquipe3;

$rod1Jog4 = $equipe6. " x ". $equipe8;
$rod1Jog4Equipe1 = $codEquipe6;
$rod1Jog4Equipe2 = $codEquipe8;

//Rodada numero 2

$rod2Jog1 = $equipe1. " x ". $equipe2;
$rod2Jog1Equipe1 = $codEquipe1;
$rod2Jog1Equipe2 = $codEquipe2;

$rod2Jog2 = $equipe7. " x ". $equipe3;
$rod2Jog2Equipe1 = $codEquipe7;
$rod2Jog2Equipe2 = $codEquipe3;

$rod2Jog3 = $equipe4. " x ". $equipe8;
$rod2Jog3Equipe1 = $codEquipe4;
$rod2Jog3Equipe2 = $codEquipe8;

$rod2Jog4 = $equipe5. " x ". $equipe6;
$rod2Jog4Equipe1 = $codEquipe5;
$rod2Jog4Equipe2 = $codEquipe6;

//Rodada numero 3

$rod3Jog1 = $equipe1. " x ". $equipe3;
$rod3Jog1Equipe1 = $codEquipe1;
$rod3Jog1Equipe2 = $codEquipe3;

$rod3Jog2 = $equipe2. " x ". $equipe8;
$rod3Jog2Equipe1 = $codEquipe2;
$rod3Jog2Equipe2 = $codEquipe8;

$rod3Jog3 = $equipe7. " x ". $equipe6;
$rod3Jog3Equipe1 = $codEquipe7;
$rod3Jog3Equipe2 = $codEquipe6;

$rod3Jog4 = $equipe4. " x ". $equipe5;
$rod3Jog4Equipe1 = $codEquipe4;
$rod3Jog4Equipe2 = $codEquipe5;

//Rodada numero 4

$rod4Jog1 = $equipe1. " x ". $equipe8;
$rod4Jog1Equipe1 = $codEquipe1;
$rod4Jog1Equipe2 = $codEquipe8;

$rod4Jog2 = $equipe3. " x ". $equipe6;
$rod4Jog2Equipe1 = $codEquipe3;
$rod4Jog2Equipe2 = $codEquipe6;

$rod4Jog3 = $equipe2. " x ". $equipe5;
$rod4Jog3Equipe1 = $codEquipe2;
$rod4Jog3Equipe2 = $codEquipe5;

$rod4Jog4 = $equipe7. " x ". $equipe4;
$rod4Jog4Equipe1 = $codEquipe7;
$rod4Jog4Equipe2 = $codEquipe4;

//Rodada numero 5

$rod5Jog1 = $equipe1. " x ". $equipe6;
$rod5Jog1Equipe1 = $codEquipe1;
$rod5Jog1Equipe2 = $codEquipe6;

$rod5Jog2 = $equipe8. " x ". $equipe5;
$rod5Jog2Equipe1 = $codEquipe8;
$rod5Jog2Equipe2 = $codEquipe5;

$rod5Jog3 = $equipe3. " x ". $equipe4;
$rod5Jog3Equipe1 = $codEquipe3;
$rod5Jog3Equipe2 = $codEquipe4;

$rod5Jog4 = $equipe2. " x ". $equipe7;
$rod5Jog4Equipe1 = $codEquipe2;
$rod5Jog4Equipe2 = $codEquipe7;

//Rodada numero 6

$rod6Jog1 = $equipe1. " x ". $equipe5;
$rod6Jog1Equipe1 = $codEquipe1;
$rod6Jog1Equipe2 = $codEquipe5;

$rod6Jog2 = $equipe6. " x ". $equipe4;
$rod6Jog2Equipe1 = $codEquipe6;
$rod6Jog2Equipe2 = $codEquipe4;

$rod6Jog3 = $equipe8. " x ". $equipe4;
$rod6Jog3Equipe1 = $codEquipe8;
$rod6Jog3Equipe2 = $codEquipe4;

$rod6Jog4 = $equipe3. " x ". $equipe2;
$rod6Jog4Equipe1 = $codEquipe3;
$rod6Jog4Equipe2 = $codEquipe2;

//Rodada numero 7

$rod7Jog1 = $equipe1. " x ". $equipe4;
$rod7Jog1Equipe1 = $codEquipe1;
$rod7Jog1Equipe2 = $codEquipe4;

$rod7Jog2 = $equipe5. " x ". $equipe7;
$rod7Jog2Equipe1 = $codEquipe5;
$rod7Jog2Equipe2 = $codEquipe7;

$rod7Jog3 = $equipe6. " x ". $equipe2;
$rod7Jog3Equipe1 = $codEquipe6;
$rod7Jog3Equipe2 = $codEquipe2;

$rod7Jog4 = $equipe8. " x ". $equipe3;
$rod7Jog4Equipe1 = $codEquipe8;
$rod7Jog4Equipe2 = $codEquipe3;




$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
				$consulta = $conecta->query("select * from Campeonato where anoEvento = '".$ano."'");
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
			
			$sql = "insert into Confrontos (rodadaConfronto, nomeConfronto, FK_codEquipe1, FK_codEquipe2, equipe1Gols, equipe2Gols, anoEvento, FK_idCamp) values 
									('1','$rod1Jog1', '$rod1Jog1Equipe1', '$rod1Jog1Equipe2','0','0','$ano','$FK'),
									('1','$rod1Jog2', '$rod1Jog2Equipe1', '$rod1Jog2Equipe2','0','0','$ano','$FK'),
									('1','$rod1Jog3', '$rod1Jog3Equipe1', '$rod1Jog3Equipe2','0','0','$ano','$FK'),
									('1','$rod1Jog4', '$rod1Jog4Equipe1', '$rod1Jog4Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog1', '$rod2Jog1Equipe1', '$rod2Jog1Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog2', '$rod2Jog2Equipe1', '$rod2Jog2Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog3', '$rod2Jog3Equipe1', '$rod2Jog3Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog4', '$rod2Jog4Equipe1', '$rod2Jog4Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog1', '$rod3Jog1Equipe1', '$rod3Jog1Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog2', '$rod3Jog2Equipe1', '$rod3Jog2Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog3', '$rod3Jog3Equipe1', '$rod3Jog3Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog4', '$rod3Jog4Equipe1', '$rod3Jog4Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog1', '$rod4Jog1Equipe1', '$rod4Jog1Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog2', '$rod4Jog2Equipe1', '$rod4Jog2Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog3', '$rod4Jog3Equipe1', '$rod4Jog3Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog4', '$rod4Jog4Equipe1', '$rod4Jog4Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog1', '$rod5Jog1Equipe1', '$rod5Jog1Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog2', '$rod5Jog2Equipe1', '$rod5Jog2Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog3', '$rod5Jog3Equipe1', '$rod5Jog3Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog4', '$rod5Jog4Equipe1', '$rod5Jog4Equipe2','0','0','$ano','$FK'),
									('6','$rod6Jog1', '$rod6Jog1Equipe1', '$rod6Jog1Equipe2','0','0','$ano','$FK'),
									('6','$rod6Jog2', '$rod6Jog2Equipe1', '$rod6Jog2Equipe2','0','0','$ano','$FK'),
									('6','$rod6Jog3', '$rod6Jog3Equipe1', '$rod6Jog3Equipe2','0','0','$ano','$FK'),
									('6','$rod6Jog4', '$rod6Jog4Equipe1', '$rod6Jog4Equipe2','0','0','$ano','$FK'),
									('7','$rod7Jog1', '$rod7Jog1Equipe1', '$rod7Jog1Equipe2','0','0','$ano','$FK'),
									('7','$rod7Jog2', '$rod7Jog2Equipe1', '$rod7Jog2Equipe2','0','0','$ano','$FK'),
									('7','$rod7Jog3', '$rod7Jog3Equipe1', '$rod7Jog3Equipe2','0','0','$ano','$FK'),
									('7','$rod7Jog4', '$rod7Jog4Equipe1', '$rod7Jog4Equipe2','0','0','$ano','$FK')
									";
								
			
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