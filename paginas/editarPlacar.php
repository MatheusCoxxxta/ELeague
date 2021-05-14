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
    <link rel="stylesheet" href="css/StyleEditarPlacar.css">
	<link rel="stylesheet" href="css/https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script language="javascript">
		function chamarWebService()
		{
			var dados = 
			{
				Gols1 : document.jogos.GolsEquipe1.value,
				Gols2 : document.jogos.GolsEquipe2.value,
				codConfronto : document.jogos.codConfronto.value
			}
			alert("Será executado.");
			$.ajax({
				 
				url: 'novosResultados.php',
				type: 'POST', 
				dataType: 'json',
				data:dados
			})
			.done(function(data)
			{
				alert("Processando...");
				for(var i in data)
				{
					alert(data[i].resultado);
				}
				
			});
		}
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
	
		<table class="mainTable" border=1>
   
			<thead> 
			  <tr class="">
			  <td id=''> <b id='colNomeEvento'> Confronto </td>
			  <td id=''> <b id='colNomeEvento'> Equipes no confronto </td>
			   
			  <td id=''> <b id='colQuantEquipe'> Gols </td>
			  <td id=''> <b id='colQuantEquipe'> Gols </td>
			  <td id=''> <b id='colQuantEquipe'> Enviar </td>

			  </tr>
			</thead>


		<form name = "jogos">
		
<?php
	
$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");


if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

$ano = $_SESSION['anoDoEvento'];
$codConfronto = $_GET['confronto']; 
 
  $sql = $conecta->prepare("select * from Confrontos where anoEvento = '".$ano."' and codConfronto = '".$codConfronto."'");
 
    if($sql -> execute())
    {
		if ($sql -> rowCount() > 0)
		{ 
			$col=0;
			
			while ($campo = $sql -> fetch (PDO::FETCH_OBJ)) 
			{
				$col++;

				echo 
				"
				</tr> <td> <input type='text' name='codConfronto' value='".$campo -> codConfronto."' readonly> </td>
				<td> ".$campo -> nomeConfronto." </td>
				<td> <input type='text' name='GolsEquipe1' value='".$campo -> equipe1Gols."'> </td>
				<td> <input type='text' name='GolsEquipe2' value='".$campo -> equipe2Gols."'> </td>
				<td> <input type='button' id='confirm'  value='Confirmar' onClick='chamarWebService();'> </td>
				
				";
			

			}
		}
   }
?>
 
 </header>
   

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>
	

</html>