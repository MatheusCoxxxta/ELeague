<html>

<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="css/styles.css">


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
	<input id="busca" type="text"  name="buscarEvento" size="46" placeholder="Buscar..." required="true">
   <table id="tabre" border=0>
      <thead>
		
  </thead>
  <tbody id="myTable">
  <td class='borda'>
  
<?php
  //lista produtos permitindo a escolha de um deles para ser adicionado 
  //conexão 
  $buscaEvento = $_POST["buscaEvento"];
  $conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");

  //mostra os produto (seleciona todos)
  $sql = $conecta->prepare("select * from Campeonato where anoEvento = '".$buscaEvento."'");

   // executar a sql
   if($sql -> execute()){ // sucesso ao executar sql?
	if ($sql -> rowCount() > 0){ // há informações?	   
	   
		$col=0;//contagem de colunas visualizadas	   
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){// percorre consulta
			 // extrai campos 
			 $col++;// conta colunas
			echo"</td><td class='borda'> <br>";
			/* echo "<center><img src='".$campo -> linkImage."' height='100px' width='150px' id='imag'><br><br>"; */
			echo "<center><img class='imag' src='trofeu.jpg' height='150px' width='150px'> <br>";
			echo "<b><font color='#0b2e59'>". $campo -> nomeCamp ." ";
			echo "<b><font color='#0b2e59'>". $campo -> anoEvento ."<br>";
			echo "<b><font color='#0b2e59'> Equipes: ". $campo -> QuantEquipe ."";
			echo "<b><font color='#0b2e59'> Jogadores: ". $campo -> jogEquipe ."<br> <br>";
			//echo "<a href=''> <p class='botoes'> Abrir Campeonato <p> </a>";
			 // obs.: O script chama um outro programa passando a tarefa adicionar junto com o idproduto
			/* echo "<br><a href='adicionarProduto.php?idproduto=".$campo -> codProduto."&preco=".$campo -> precoProd."'> <p class='botoes'> Adicionar <p></a>";// link compra    */  
			 echo "</td>";// fecha coluna
			 // a cada 6 produtos quebrar linha
			 if ($col>=3)
				 { 
				  echo "</tr>";// fecha linha
				  $col=0;// inicia contagem
			 } 
		  } // while
	  } //if
} // if    
 echo "</table>";// fecha tabela
 ?>
 
    </header>

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>