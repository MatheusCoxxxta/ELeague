<html>

<head>
    <meta charset-"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>teste</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content1.css">
    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css">
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/Style.css">
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <script src="jquery-3.4.1.js"></script>
	<script>
		$('#Cadastrar').
		function eventoAdicionado ()
        {
            swal("Pronto!", "Evento criado com sucesso!", "success");
        }
	</script>
</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="Campeonatos.php">Campeonatos </a></li>
                <li> <a href="Equipes.php">Equipes</a></li>
                <li> <a href="#">Notícias</a></li>
                <li> <a href="mostrarJogos.php">Jogos</a> </li>
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
		<table border=0>
			<td class="borda">
				<form action="Cadastro.php" method="POST">
					<h6 class="nomeEvento"> Nome do evento: </h6>
					<input type="text" id="Camp"  name="nomeCamp" size="46" placeholder="Nome do Evento" required="true">
					
					
					<select class="select1" data-selected="" name="QuantEquipe">
					<option value="" selected="selected" disabled="disabled"> Numero de equipes </option>
						<?php 
						$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
						$sql = $conecta->prepare("SELECT possiveisQuantidades FROM possiveisQuantidadesDeEquipes");
						  if($sql -> execute()){ // verifica se há sucesso ao executar sql
							if ($sql -> rowCount() > 0){ // verifica se há informações   
								
								
								while ($campo = $sql -> fetch (PDO::FETCH_OBJ))
								{
									echo '<option value="'.$campo->possiveisQuantidades.'"> '.$campo->possiveisQuantidades.' </option>';
								}
							}
						  }
						?>
					</select>	
						
					<select class="select2" data-selected="" name="jogEquipe">
					<option value="" selected="selected" disabled="disabled"> Jogadores por equipe </option>
						<?php 
						$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
						$sql = $conecta->prepare("SELECT possiveisQuantidadesDeJogadores FROM possiveisQuantidadesDeJogadores");
						  if($sql -> execute()){ // verifica se há sucesso ao executar sql
							if ($sql -> rowCount() > 0){ // verifica se há informações   
								
								
								while ($campo = $sql -> fetch (PDO::FETCH_OBJ))
								{
									echo '<option value="'.$campo->possiveisQuantidadesDeJogadores.'"> '.$campo->possiveisQuantidadesDeJogadores.' </option>';
								}
							}
						  }
						?>
					</select>		
						
					<select class="select3" data-selected="" name="anoEvento">
					<option value="" selected="selected" disabled="disabled"> Ano... </option>
						<?php 
						$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
						$sql = $conecta->prepare("SELECT possiveisAnosDevento FROM possiveisAnosDevento");
						  if($sql -> execute()){ // verifica se há sucesso ao executar sql
							if ($sql -> rowCount() > 0){ // verifica se há informações   
								
								
								while ($campo = $sql -> fetch (PDO::FETCH_OBJ))
								{
									echo '<option value="'.$campo->possiveisAnosDevento.'"> '.$campo->possiveisAnosDevento.' </option>';
								}
							}
						  }
						?>
					
					<br> <br> <br>
					</select>
					<br>
					<br>
					<input id="Cadastrar" type="submit" value="Cadastrar" onclick='eventoAdicionado();'>
			
				</form>
			</td>
		</table>
    </header>

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>