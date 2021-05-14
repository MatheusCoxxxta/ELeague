<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
$nomeCamp = $_POST["nomeCamp"];
$QuantEquipe = $_POST["QuantEquipe"];
$jogEquipe = $_POST["jogEquipe"];
$anoEvento = $_POST["anoEvento"];
//Sessão é criada para armazenar o ano do campeonato e passar para a seguinte pagina, de cadastro de equipes
$_SESSION['anoDoEvento'] = $anoEvento; 
	$db = new mysqli ("localhost", "root", '', "Campeonato");	//configurações do banco de dados
		if ($db -> connect_error > 0) //verificação de erro ao conectar ao banco de dados
			die('Erro so tentar conectar [' . $db->connect_error . ']');
		else{ //processo que acontecerá em caso de sucesso
			$sql = "insert into Campeonato (nomeCamp, QuantEquipe, jogEquipe, anoEvento) values 
									('$nomeCamp', '$QuantEquipe', '$jogEquipe', '$anoEvento')";	// inserindo valores na tabela Campeonato		
			if(!$result = $db -> query($sql)) // verificação de erro ao execuytar query
			{
				die ("há um erro na execução da query [" . $db->error. "]");
			}else
			{	// em caso de sucesso, será executado query de consulta para descobrir quantidade de equipes no campeonato
				$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
				$consulta = $conecta->query("select * from Campeonato where QuantEquipe = '".$QuantEquipe."'");
					if($consulta -> execute()){ // sucesso ao executar sql?
						if ($consulta -> rowCount() > 0){ // há informações?	   
							while ($campo = $consulta -> fetch (PDO::FETCH_OBJ)){// percorre consulta
								if($campo -> QuantEquipe == 6) 
								{	// caso o campoenato tenha 6 equipes, o administrador será redirecionado a pagina de cadastro de 6 equipes
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-6.html');
								}
								elseif($campo -> QuantEquipe == 8)
								{	// caso o campoenato tenha 8 equipes, o administrador será redirecionado a pagina de cadastro de 8 equipes
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-8.html');
								} 
								elseif($campo -> QuantEquipe == 10)
								{	// caso o campoenato tenha 10 equipes, o administrador será redirecionado a pagina de cadastro de 10 equipes
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-10.html');
								} 
								elseif($campo -> QuantEquipe == 12)
								{	// caso o campoenato tenha 12 equipes, o administrador será redirecionado a pagina de cadastro de 12 equipes
									header('Location: http://127.0.0.1/ELeague/paginas/adicionarEquipe-12.html');
								} 
							}
						}
					}
			}
			$db->close(); // fecha conexão com o banco de dados
		}	
	?> 
