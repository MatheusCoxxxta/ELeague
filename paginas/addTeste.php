<!-- Tela 8 equipes-->
 
<html>

	<link rel="shortcut icon" href="LogoEL.png" type="image/x-icon" />

<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro das Equipes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content.css">
    <link rel="stylesheet" href="css/Fixed-Header--Footer--Scrolling-Body-Content1.css">
    <link rel="stylesheet" href="css/Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="css/Sidebar-Menu.css">
    <link rel="stylesheet" href="css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="css/SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="css/StyleAddEquipe10.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <script src="jquery-3.4.1.js"></script>
	
</head>

<body>
    <div id="wrapper" style="position:absolute;top:0;z-index:999;">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#">Home </a></li>
				<li> <a href="Campeonatos.php">Campeonatos</a></li>
                <li> <a href="#">Equipes</a></li>
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
        <p class="nomeEvento"> Cadastrar Equipes: </p>
		<table border=0>
			<td class="borda">
				<form action="adicionarEquipe10.php" method="POST">
					
					<input type="text" id="Camp"  name="nomeEquipe" size="46" placeholder="1ª Equipe" required="true">
					<input type="text" id="Camp"  name="nomeEquipe1" size="46" placeholder="2ª Equipe" required="true">
					<br>
					<input type="text" id="Camp"  name="nomeEquipe2" size="46" placeholder="3ª Equipe" required="true">
					<input type="text" id="Camp"  name="nomeEquipe3" size="46" placeholder="4ª Equipe" required="true">
					<br>
					<input type="text" id="Camp"  name="nomeEquipe4" size="46" placeholder="5ª Equipe" required="true">
					<input type="text" id="Camp"  name="nomeEquipe5" size="46" placeholder="6ª Equipe" required="true">
					<br>
					<input type="text" id="Camp"  name="nomeEquipe6" size="46" placeholder="7ª Equipe" required="true">
					<input type="text" id="Camp"  name="nomeEquipe7" size="46" placeholder="8ª Equipe" required="true">
					<br>
					<input type="text" id="Camp"  name="nomeEquipe8" size="46" placeholder="9ª Equipe" required="true">
					<input type="text" id="Camp"  name="nomeEquipe9" size="46" placeholder="10ª Equipe" required="true">
					<br>
					<input id="Cadastrar" type="submit" value="Cadastrar" onclick='eventoAdicionado();'>
				</form>
			</td>
		</table>
    </header>

  <?php
  if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
  echo $_SESSION['anoDoEvento'];
  ?>
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>