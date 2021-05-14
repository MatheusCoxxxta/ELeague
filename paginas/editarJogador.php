<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">

    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css"> 
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/StyleEquipesAlterar.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="jquery-3.2.1.min.js"></script>
	<script>
		
	</script>


</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="home.php"> Home </a></li>
				<li> <a href="Campeonatos.php">Campeonatos</a></li>
                <li> <a href="#">Equipes</a> </li>
                <li> <a href="#">Notícias</a></li>
                <li> <a href="#">Arbitragem</a><a href="#">Boletim</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
		<a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle" style="position:absolute;top:7px;color:rgb(255,255,255);"> 
			<img style="position: absolute; top: 0; width:35px; height:35px;" src="iconHamb.png" >
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
	
	
	<form action="editJogador.php" method="POST">
   <table id="tabelaPrincipal" border=1>
   
    <thead> 
      <tr>
      <td id='tamColuna1'> <b id='colNomeEvento'> Codigo do Jogador </td>
       <!-- <td id='tamColuna2'> <b id='colAnoEvento'> Ano Evento </td> -->
      <td id='tamColuna3'> <b id='colQuantEquipe'> Nome do Jogador </td>
       <!-- <td id='tamColuna4'> <b id='colNumJogadores'> Numero de Jogadores </td>
      <td id='tamColuna5'> <b id='colExcluirEvento'> <b ><input type="submit" class='w3-btn w3-white w3-border w3-border-red w3-round-large' name="excluir" value="Excluir"></input>  </b> </td> -->
      </tr>
    </thead>
 
  
  
  
<?php
//verifica se algum valor foi passado para a váriavel 

	
	$codJogador = $_GET['codJogador'];
	$codEquipe = $_GET['codEquipe'];
//criando e iniciando variavel que faz as configurações para conectar ao banco de dados 
$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

{
 //crinado e iniciando váriavel para executar comando SQL no banco de dados
  $sql = $conecta->prepare("select * from Jogadores where codJogador = '".$codJogador."'");
}  

   // executa a sql
   if($sql -> execute()){ // verifica se há sucesso ao executar sql
	if ($sql -> rowCount() > 0){ // verifica se há informações   
	    
		$col=0;
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){
			$jogador = $campo -> nomeJogador;
			if($jogador == "Novo jogador") 
			{
				$jogador = "";
				
			}
			 $col++;
			 
			echo"<tr class='borda'> <br>";
			//campo de tipo hidden(as informações não aparecem) é utilizado para passar o código da equipe para o script php
			
			echo "<td><b id='col1'><font color='#0b2e59'> <input type='hidden' name='codJogador' value='". $campo -> codJogador ." '> ". $campo -> codJogador ." </td>";
			//campo de texto permite que o usuário veja o nome atual e digite um novo nome para a equipe
			echo "<td><font color='#0b2e59'> <input class='editarEquipe' type='text' name='nomeJogador' value=' ". $jogador ."' </td>";
			echo "<td style='display: none;'><b  id='col1'><font color='#0b2e59'> <input type='hidden'  name='codEquipe' value='". $codEquipe." '>";
			
			 echo "<br></tr>";
			 
			 if ($col>=4)  
				 { 
				  echo "</td>";
				  $col=0;
				 }
			 } 
		
	  }
} 
 echo "</table>";// fecha tabela
 
 
 
 ?>
   <input type="submit" id="btnBusca" name="submit" value="Alterar" onclick='eventoAdicionado();'>
   <input type="submit" id="btnExcluir" name="submit" value="Excluir" onclick='eventoAdicionado();'>
   
 </form>

  
 </header>
   

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>