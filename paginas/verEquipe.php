<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 

    <?php
    $conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

	$codigoDaEquipeSelecionada = $_GET['codigoDaEquipe'];
	$sql = $conecta->prepare("select * from Equipes where codEquipe = '".$codigoDaEquipeSelecionada."'");


	if($sql -> execute()){ 
		if ($sql -> rowCount() > 0){ 
	    
			$col=0;
			while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){
			echo $campo -> nomeEquipe;
			}
		}
	}
    ?>


     </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">

    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css"> 
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/StyleVerEquipe.css">
	<link rel="stylesheet" href="css/https://www.w3schools.com/w3css/4/w3.css">


    <script src="jquery-3.2.1.min.js"></script>
	<script>
		
	</script>


</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="Campeonatos.php"> Campeonatos </a></li>
				
                <li> <a href="Equipes.php">Equipes</a> </li>
                <li> <a href="#">Notícias</a></li>
                <li> <a href="mostraJogos.php">Jogos</a> </li>
				<li> <a href="#">Boletim</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
		<a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle" style="position:absolute;top:7px;color:rgb(255,255,255);"> 
			<!-- <img style="position: absolute; top: 0; width:35px; height:35px;" src="iconHamb.png" > -->
		</a>
                <div class="row">
                    <div class="col-md-12">
                        <div></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="container-fluid" style="color:rgb(255,255,255);"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
        <div class="row">
            <div class="col-md-12">
                <div></div>
            </div>
        </div>
    </div>
	<header>
	<div id="divPrincipal"> 
			<form action="alterarEquipe.php" method="POST" enctype="multipart/form-data">
<?php
session_start();
$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

	$codigoDaEquipeSelecionada = $_GET['codigoDaEquipe'];
	$sql = $conecta->prepare("select codEquipe, nomeEquipe, logotipo from Equipes where codEquipe = '".$codigoDaEquipeSelecionada."' ");
	//echo $codigoDaEquipeSelecionada;
	//$sql = $conecta->prepare("select * from Jogadores where FK_codEquipe = '".$codigoDaEquipeSelecionada."'");
	
	
	
		
  
   
   if($sql -> execute()){ // sucesso ao executar sql?
	if ($sql -> rowCount() > 0){ // há informações?	   
	    
		$col=0;//contagem de colunas visualizadas	   
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){// percorre consulta
			 // extrai campos 
			 $col++;// conta colunas
			echo"<tr class='borda'> <br>";
			

			//echo "<td><b id='col1'><font color='#0b2e59'> <input type='hidden' name='codEquipe' value='". $campo -> codEquipe ." '> ". $campo -> codEquipe ." </td>";
			//campo de texto permite que o usuário veja o nome atual e digite um novo nome para a equipe
			echo "<td><font color='#0b2e59'> <input type='hidden' class='verCod' name='codEquipe' value='". $campo -> codEquipe ." '>  </td>";
			echo "<td><font color='#000000'> Nome atual: <input class='editarEquipe' type='text' name='novoNomeEquipe' value='". $campo -> nomeEquipe ."' </td> <br>";
			$logotipo = $campo -> logotipo;
		
		
			
			
			 echo "<br></tr>";// fecha coluna
			
			 if ($col>=4)  
				 { 
				  echo "</td>";// fecha linha
				  $col=0;// inicia contagem
			 } 
		  } // while
	  } //if
} // if    

			$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
			$total = $conecta->query('select count(*) from Jogadores  where FK_codEquipe = '.$codigoDaEquipeSelecionada.' ')->fetchColumn();
			$Jogadores = $conecta->prepare("select * from Jogadores where FK_codEquipe = '".$codigoDaEquipeSelecionada."'");
			
			
			if($total > 0) 
			{
				if($Jogadores -> execute())
				{ // sucesso ao executar sql?
					if ($Jogadores -> rowCount() > 0)
					{ // há informações?	   
	    
					$col=0;//contagem de colunas visualizadas
				
						while ($campo = $Jogadores -> fetch (PDO::FETCH_OBJ))
						{// percorre consulta
						// extrai campos 
						$col++;// conta colunas
						$jogador = $campo -> nomeJogador;
						if($jogador == "Novo jogador")
						{
							echo "<h4>", $campo -> nomeJogador , " <a href='editarJogador.php?codJogador= "
									.$campo -> codJogador."&codEquipe=".$codigoDaEquipeSelecionada." '> <img src='imagens/edit.png' width='20px' height='20px'> Adicionar? </a> </h4> <br>" ;
							
						}else{
							echo "<h3>", $campo -> nomeJogador , " <a href='editarJogador.php?codJogador= "
									.$campo -> codJogador."&codEquipe=".$codigoDaEquipeSelecionada." '> <img src='imagens/edit.png' width='20px' height='20px'> </a> </h3> <br>" ;
						}
			
						}// while
					} //if
				}// if    
			}
				
			else {
	
?> 
					<input type="text" class="jogador"  name="jogador1" size="46" placeholder="Novo Jogador" value="">
					<input type="text" class="jogador"  name="jogador2" size="46" placeholder="Novo Jogador" >
					<br>
					<input type="text" class="jogador"  name="jogador3" size="46" placeholder="Novo Jogador" >
					<input type="text" class="jogador"  name="jogador4" size="46" placeholder="Novo Jogador" >
					<br>
					<input type="text" class="jogador"  name="jogador5" size="46" placeholder="Novo Jogador" >
					<input type="text" class="jogador"  name="jogador6" size="46" placeholder="Novo Jogador" >
					<br>
					<input type="text" class="jogador"  name="jogador7" size="46" placeholder="Novo Jogador" >
					<input type="text" class="jogador"  name="jogador8" size="46" placeholder="Novo Jogador" >
					<br>
					<input type="text" class="jogador"  name="jogador9" size="46" placeholder="Novo Jogador" >
					<input type="text" class="jogador"  name="jogador10" size="46" placeholder="Novo Jogador" >
					<br>
					<input type="text" class="jogador"  name="jogador11" size="46" placeholder="Novo Jogador" >
					<input type="text" class="jogador"  name="jogador12" size="46" placeholder="Novo Jogador" >
					<br>
					<input type='submit' id='botaoSalvar' name="submit" value='Adicionar'></input>
			
				
					
			<?php 
			} 		
			
			if($logotipo == ""){
				echo "
					<img id='addNovaImagem' src='imagens/addImageIcon.png'> 
					<br>
					";
			}else{
				echo "
					<img id='addNovaImagem' src='Logotipos/".$logotipo."'> 
					<br>
					<label for='selecionarArquivo'>Selecionar nova imagem &#187;</label>
					<input id='selecionarArquivo' type='file' name='arquivo'>
					";
			}			
			
				echo "
					<label for='selecionarArquivo'>Selecionar nova imagem &#187;</label>
					<input id='selecionarArquivo' type='file' name='arquivo'>
					";
		if($total > 0) 
		{			
			echo "	<input type='submit' id='botaoSalvar' name='submit' value='Salvar alterações'></input> ";
				
		}		
		else 
		{
			echo "	<input type='submit' id='botaoSalvar' name='submit' value='Adicionar Jogadores'></input> ";	
		}		
				
					//<a href ='home.php' > <input type='button' id='botaoDescartar' value='Alterar Jogadores'></input> </a>
					
					
					
					
					
					
					?>
 
			
			</form>
 
 </header>
   

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>