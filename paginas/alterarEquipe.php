<?php
	$jogador1 = $_POST["jogador1"]; if($jogador1 == "") $jogador1 = "Novo jogador";
	$jogador2 = $_POST["jogador2"]; if($jogador2 == "") $jogador2 = "Novo jogador";
	$jogador3 = $_POST["jogador3"]; if($jogador3 == "") $jogador3 = "Novo jogador";
	$jogador4 = $_POST["jogador4"]; if($jogador4 == "") $jogador4 = "Novo jogador";
	$jogador5 = $_POST["jogador5"]; if($jogador5 == "") $jogador5 = "Novo jogador";
	$jogador6 = $_POST["jogador6"]; if($jogador6 == "") $jogador6 = "Novo jogador";
	$jogador7 = $_POST["jogador7"]; if($jogador7 == "") $jogador7 = "Novo jogador";
	$jogador8 = $_POST["jogador8"]; if($jogador8 == "") $jogador8 = "Novo jogador";
	$jogador9 = $_POST["jogador9"]; if($jogador9 == "") $jogador9 = "Novo jogador";
	$jogador10 = $_POST["jogador10"]; if($jogador10 == "") $jogador10 = "Novo jogador";
	$jogador11 = $_POST["jogador11"]; if($jogador11 == "") $jogador11 = "Novo jogador";
	$jogador12 = $_POST["jogador12"]; if($jogador12 == "") $jogador12 = "Novo jogador";
	$codEquipe = $_POST["codEquipe"]; 
	$novoNomeEquipe = $_POST["novoNomeEquipe"];
	
	if(isset($_FILES['arquivo'])){ 
		
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "Logotipos/";
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
		
	}	
		
		
		
		
	$link = mysqli_connect ("localhost", "root", '', "Campeonato");
		
		//$query = "select count(*) from Jogadores where FK_codEquipe = '".$codEquipe."';";	
		
	$submit=$_POST["submit"];
switch ($submit) {
    case 'Adicionar Jogadores':
        //
		if ($link -> connect_error > 0)
			die('Erro so tentar conectar [' . $link->connect_error . ']');
		else{
			
			$query .= "insert into Jogadores (nomeJogador, FK_codEquipe) values 
									('$jogador1','$codEquipe'),
									('$jogador2','$codEquipe'),
									('$jogador3','$codEquipe'),
									('$jogador4','$codEquipe'),
									('$jogador5','$codEquipe'),
									('$jogador6','$codEquipe'),
									('$jogador7','$codEquipe'),
									('$jogador8','$codEquipe'),
									('$jogador9','$codEquipe'),
									('$jogador10','$codEquipe'),
									('$jogador11','$codEquipe'),
									('$jogador12','$codEquipe');";
									
			$query .= "update Equipes set nomeEquipe = '".$novoNomeEquipe."', logotipo = '".$novo_nome."'  where codEquipe ='".$codEquipe."' ";	
			
			
			if (mysqli_multi_query($link, $query)) 
			{
				header('Location: http://127.0.0.1/ELeague/paginas/verEquipe.php?codigoDaEquipe='.$codEquipe);
				
			}else 
			{
				echo "Error: " . $query . "<br>" . mysqli_error($link);
			}

			mysqli_close($link);
		}
        break;	
		$submit=$_POST["submit"];
		

    case 'Salvar alterações':
        //
		if ($link -> connect_error > 0)
			die('Erro so tentar conectar [' . $link->connect_error . ']');
		else{
							
			$query .= "update Equipes set nomeEquipe = '".$novoNomeEquipe."', logotipo = '".$novo_nome."'  where codEquipe ='".$codEquipe."' ";	
			
			
			if (mysqli_multi_query($link, $query)) 
			{
				header('Location: http://127.0.0.1/ELeague/paginas/verEquipe.php?codigoDaEquipe='.$codEquipe);
				
			}else 
			{
				echo "Error: " . $query . "<br>" . mysqli_error($link);
			}

			mysqli_close($link);
		}
        break;	
}		
			
			?>
		
		
		
		
		
		
		
		
		
		
		