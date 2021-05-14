<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 
		Sorteio de jogos


     </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">

    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css"> 
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/StyleNovosConfrontos12.css">
	<link rel="stylesheet" href="css/https://www.w3schools.com/w3css/4/w3.css">


    <script src="jquery-3.2.1.min.js"></script>
	<script>
		
	</script>


</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class='sidebar-brand'> <a href='Campeonatos.php'> Campeonatos </a></li>
				
                <li> <a href='Equipes.php'>Equipes</a></li>
                <li> <a href='#'>Notícias</a></li>
                <li> <a href='mostrarJogos.php'>Jogos</a></li>
				<li> <a href='#'>Boletim</a></li>
				<li> <a href='NovoCampeonato.php'>Adicionar Campeonato</a></li>
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
	
		<div class='aviso' rows="5" readonly>
		<h3>Avisos</h3>
			Se confirmar o processo, as equipes a seguir estarão cadastradas no campeonato selecionado.
			Se uma equipe desistir durante o evento, todas as equipes que ainda estiverem em pendencia de jogos contra ela
			automáticamente receberam uma vitória com placar de 3 x 0.
			<br>
			<br>
			Cheque o nome das equipes, se tudo estiver correto, clique em confirmar.
			<br>
			- Cada equipe terá uma quantidade de jogos predefinida a jogar, fique atento.
			<br>
			- Ao confirmar você se compromete a gerenciar o evento do ano em questão.
		</div>
		

		<form action="gerandoConfrontos12.php" method="POST"> 
		<table class="mainTable" border=0>
<?php
	
$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

$ano = $_GET['ano'];
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

$_SESSION['anoDoEvento'] = $ano; 

 
  $sql = $conecta->prepare("select codEquipe, nomeEquipe, nomeCamp, anoEvento from Equipes
							inner join Campeonato on Equipes.FK_idCamp = Campeonato.idCamp  where Campeonato.anoEvento = '".$ano."'");
 
    if($sql -> execute())
    {
		if ($sql -> rowCount() > 0)
		{ 
			$col=0;
			
			while ($campo = $sql -> fetch (PDO::FETCH_OBJ)) 
			{
				$col++;
				echo" 
				
				</tr> <td> <input type='text' class='equipe' name='Equipe".$col."' value=' ". $campo -> nomeEquipe ."' readonly> </td>
				<td> <input type='text' class='codEquipe' name='codEquipe".$col."' value=' ". $campo -> codEquipe ."' readonly> </td>
				";
				
				
				
			
			
			 echo "<br></tr>";
			 
			 
			  
			}
		}
   }
?>
 <input type="submit" id="confirm"  value="Confirmar" onclick='eventoAdicionado();'>
 </div>
 </div>
 </header>
   

  
    
</table>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>