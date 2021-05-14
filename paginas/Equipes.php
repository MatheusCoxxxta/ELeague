<html>
<?php 
if(isset($_GET["ano"])) $ano=$_GET["ano"];
	else $ano = "";
	

 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">

    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css"> 
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/StyleEquipe.css">
	<link rel="stylesheet" href="css/https://www.w3schools.com/w3css/4/w3.css">


    <script src="jquery-3.2.1.min.js"></script>
	<script>
		
	</script>


</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
			<?php echo " 
                <li class='sidebar-brand'> <a href='Campeonatos.php'> Campeonatos </a></li>
				
                <li> <a href='Equipes.php'>Equipes</a></li>
                <li> <a href='#'>Notícias</a></li>
                <li> <a href='mostrarJogos.php?ano=$ano'>Jogos</a></li>
				<li> <a href='#'>Boletim</a></li> 
				
				; " ?>
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
	<img class="eleague" src="imagens/eleague1.png">
	
	<form action="excluir.php" method="POST">
   <table id="tabelaPrincipal" border=0>
   
    <thead> 
      <tr class="headTable">
      <td id='tamColuna1'> <b id='colNomeEvento'> Código da Equipe </td>

      <td id='tamColuna3'> <b id='colQuantEquipe'> Nome da Equipe </td>

    
      </tr>
    </thead>
 
  
  
  
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
//$anoEventoEquipe = $_SESSION['anoDoEvento'];
//$_SESSION['anoDoEvento'] = $ano;


if(isset($_POST["buscaEvento"])) $buscaEvento=$_POST["buscaEvento"];
	else $buscaEvento = "";
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

{
	
	if($ano == "")
	{
		$total = $conecta->query("select count(*) from Equipes")->fetchColumn();
		
		echo $total;
		$registros = 6; 
		$numPaginas = ceil($total/$registros);
		$inicio = ($registros*$pagina)-$registros;
		
		$sql = $conecta->prepare("select codEquipe, nomeEquipe, nomeCamp, anoEvento from Equipes
				inner join Campeonato on Equipes.FK_idCamp = Campeonato.idCamp
				limit $inicio,$registros");
	}
	else
	{
		$total = $conecta->query("select count(*) from Equipes
			inner join Campeonato on Equipes.FK_idCamp = Campeonato.idCamp  where Campeonato.anoEvento = '".$ano."'")->fetchColumn();
		
		echo $total;
		$registros = 6; 
		$numPaginas = ceil($total/$registros);
		$inicio = ($registros*$pagina)-$registros;   
				
		$sql = $conecta->prepare("select codEquipe, nomeEquipe, nomeCamp, anoEvento from Equipes
				inner join Campeonato on Equipes.FK_idCamp = Campeonato.idCamp  where Campeonato.anoEvento = '".$ano."'
				limit $inicio,$registros");
	}
  
  
  echo $total;
  $registros = 6; 
  $numPaginas = ceil($total/$registros);
  $inicio = ($registros*$pagina)-$registros;   
   //where anoEquipe= '".$anoEventoEquipe."' 
}  
   // executar a sql
   if($sql -> execute()){ // sucesso ao executar sql?
	if ($sql -> rowCount() > 0){ // há informações?	   
	    
		$col=0;//contagem de colunas visualizadas	   
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){// percorre consulta
			 // extrai campos 
			 $col++;// conta colunas
			echo"<tr class='borda'> <br>";
			
			echo "<td><b id='col1'>". $campo -> codEquipe ." </td> ";
			
				echo "<td> <a href='verEquipe.php?codigoDaEquipe=".$campo -> codEquipe."'> <b id='col3'> ". $campo -> nomeEquipe ." </a> </td>";
			
			
			
			 echo "<br></tr>";
			
			 if ($col>=4)  
				 { 
				  echo "</td>";
				  $col=0;// inicia contagem
			 } 
		  } // while
	  } //if
} // if     
 echo "</table>";// fecha tabela
 for($i = 1; $i < $numPaginas + 1; $i++) { 
        echo  "<a class='borda' href='Equipes.php?ano=".$ano."&pagina=$i'>".$i."</a> "; 
    } 
 ?>
 </form>
  <b id="textoBusca"> Alterar dados da equipe: </b>
  <form action="EquipesAlterarNome.php" method="POST">
    <input id="buscar" type="text"  name="buscaIdEquipe" size="46" placeholder="Buscar por nome/código" required="true">
    <input type="submit" id="btnBusca"  value="Buscar" onclick='eventoAdicionado();'>
  </form>
 <?php
	print $total;
	if($total == 6) echo "<a id='gerarConfrontosBotao' href='novosConfrontos6.php?ano=".$ano."'> Gerar novos confrontos </a>";
	elseif($total == 8) echo "<a id='gerarConfrontosBotao' href='novosConfrontos8.php?ano=".$ano."'> Gerar novos confrontos </a>";
	elseif($total == 10) echo "<a id='gerarConfrontosBotao' href='novosConfrontos10.php?ano=".$ano."'> Gerar novos confrontos </a>";
	elseif($total == 12) echo "<a id='gerarConfrontosBotao' href='novosConfrontos12.php?ano=".$ano."'> Gerar novos confrontos </a>";
	
?>
 </header>
   

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>