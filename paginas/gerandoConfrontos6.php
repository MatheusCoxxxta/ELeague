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

$codEquipe1 = $_POST["codEquipe1"];
$codEquipe2 = $_POST["codEquipe2"];
$codEquipe3 = $_POST["codEquipe3"];
$codEquipe4 = $_POST["codEquipe4"];
$codEquipe5 = $_POST["codEquipe5"];
$codEquipe6 = $_POST["codEquipe6"];

//Rodada numero 1

$rod1Jog1 = $equipe1. " x ". $equipe2;
$rod1Jog1Equipe1 = $codEquipe1;
$rod1Jog1Equipe2 = $codEquipe2;

$rod1Jog2 = $equipe3. " x ". $equipe4;
$rod1Jog2Equipe1 = $codEquipe3;
$rod1Jog2Equipe2 = $codEquipe4;

$rod1Jog3 = $equipe5. " x ". $equipe6;
$rod1Jog3Equipe1 = $codEquipe5;
$rod1Jog3Equipe2 = $codEquipe6;

//Rodada numero 2

$rod2Jog1 = $equipe1. " x ". $equipe3;
$rod2Jog1Equipe1 = $codEquipe1;
$rod2Jog1Equipe2 = $codEquipe3;

$rod2Jog2 = $equipe2. " x ". $equipe6;
$rod2Jog2Equipe1 = $codEquipe2;
$rod2Jog2Equipe2 = $codEquipe6;

$rod2Jog3 = $equipe4. " x ". $equipe5;
$rod2Jog3Equipe1 = $codEquipe4;
$rod2Jog3Equipe2 = $codEquipe5;

//Rodada numero 3

$rod3Jog1 = $equipe1. " x ". $equipe6;
$rod3Jog1Equipe1 = $codEquipe1;
$rod3Jog1Equipe2 = $codEquipe6;

$rod3Jog2 = $equipe3. " x ". $equipe5;
$rod3Jog2Equipe1 = $codEquipe3;
$rod3Jog2Equipe2 = $codEquipe5;

$rod3Jog3 = $equipe2. " x ". $equipe4;
$rod3Jog3Equipe1 = $codEquipe2;
$rod3Jog3Equipe2 = $codEquipe4;

//Rodada numero 4

$rod4Jog1 = $equipe1. " x ". $equipe5;
$rod4Jog1Equipe1 = $codEquipe1;
$rod4Jog1Equipe2 = $codEquipe5;

$rod4Jog2 = $equipe2. " x ". $equipe3;
$rod4Jog2Equipe1 = $codEquipe2;
$rod4Jog2Equipe2 = $codEquipe3;

$rod4Jog3 = $equipe4. " x ". $equipe6;
$rod4Jog3Equipe1 = $codEquipe4;
$rod4Jog3Equipe2 = $codEquipe6;

//Rodada numero 5

$rod5Jog1 = $equipe1. " x ". $equipe4;
$rod5Jog1Equipe1 = $codEquipe1;
$rod5Jog1Equipe2 = $codEquipe2;

$rod5Jog2 = $equipe2. " x ". $equipe5;
$rod5Jog2Equipe1 = $codEquipe2;
$rod5Jog2Equipe2 = $codEquipe5;

$rod5Jog3 = $equipe3. " x ". $equipe6;
$rod5Jog3Equipe1 = $codEquipe3;
$rod5Jog3Equipe2 = $codEquipe6;

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
									('2','$rod2Jog1', '$rod2Jog1Equipe1', '$rod2Jog1Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog2', '$rod2Jog2Equipe1', '$rod2Jog2Equipe2','0','0','$ano','$FK'),
									('2','$rod2Jog3', '$rod2Jog3Equipe1', '$rod2Jog3Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog1', '$rod3Jog1Equipe1', '$rod3Jog1Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog2', '$rod3Jog2Equipe1', '$rod3Jog2Equipe2','0','0','$ano','$FK'),
									('3','$rod3Jog3', '$rod3Jog3Equipe1', '$rod3Jog3Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog1', '$rod4Jog1Equipe1', '$rod4Jog1Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog2', '$rod4Jog2Equipe1', '$rod4Jog2Equipe2','0','0','$ano','$FK'),
									('4','$rod4Jog3', '$rod4Jog3Equipe1', '$rod4Jog3Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog1', '$rod5Jog1Equipe1', '$rod5Jog1Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog2', '$rod5Jog2Equipe1', '$rod5Jog2Equipe2','0','0','$ano','$FK'),
									('5','$rod5Jog3', '$rod5Jog3Equipe1', '$rod5Jog3Equipe2','0','0','$ano','$FK')
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