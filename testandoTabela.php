<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="Fixed-Header--Footer--Scrolling-Body-Content.css">

    <link rel="stylesheet" href="Parallax-Scroll-Effect.css">
    <link rel="stylesheet" href="Sidebar-Menu.css"> 
    <link rel="stylesheet" href="Sidebar-Menu1.css">
    <link rel="stylesheet" href="SIdebar-Responsive-2.css">
    <link rel="stylesheet" href="SIdebar-Responsive-21.css">
    <link rel="stylesheet" href="testandoTabela.css">
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
	
	
	<form action="excluir.php" method="POST">
   <table id="tabelaPrincipal" border=0>
   
    <thead> 
      <tr>
      <td id='tamColuna1'> <b id='colNomeEvento'> Nome Evento </td>
      <td id='tamColuna2'> <b id='colAnoEvento'> Ano Evento </td>
      <td id='tamColuna3'> <b id='colQuantEquipe'> Quantidade de equipes </td>
      <td id='tamColuna4'> <b id='colNumJogadores'> Numero de Jogadores </td>
      <td id='tamColuna5'> <b id='colExcluirEvento'> <b ><input type="submit" class='w3-btn w3-white w3-border w3-border-red w3-round-large' value="Excluir"></input>  </b> </td>
      </tr>
    </thead>
 
  
  
  
<?php

if(isset($_POST["buscaEvento"])) $buscaEvento=$_POST["buscaEvento"];
	else $buscaEvento = "";


$conecta = new PDO("mysql:host=localhost;dbname=Campeonato", "root", "");
if ($buscaEvento == "")
{
$sql = $conecta->prepare("select * from Campeonato");
}
else
{
  //lista produtos permitindo a escolha de um deles para ser adicionado 
  //conexão 
  
	
  //mostra os produto (seleciona todos)
  $sql = $conecta->prepare("select * from Campeonato where
    QuantEquipe = '".$buscaEvento."' or  jogEquipe = '".$buscaEvento."' or anoEvento = '".$buscaEvento."'");
}  
   // executar a sql
   if($sql -> execute()){ // sucesso ao executar sql?
	if ($sql -> rowCount() > 0){ // há informações?	   
	    
		$col=0;//contagem de colunas visualizadas	   
		while ($campo = $sql -> fetch (PDO::FETCH_OBJ)){// percorre consulta
			 // extrai campos 
			 $col++;// conta colunas
			echo"<tr class='borda'> <br>";
			/* echo "<center><img src='".$campo -> linkImage."' height='100px' width='150px' id='imag'><br><br>"; */
			//echo "<center><img class='imag' src='trofeu.jpg'> <br>";
			echo "<td><b id='col1'><font color='#0b2e59'>". $campo -> nomeCamp ." </td>";
      echo "<td><b id='col2'><font color='#0b2e59'>". $campo -> anoEvento ."</td>";
      echo "<td><b id='col3'><font color='#0b2e59'> ". $campo -> QuantEquipe ." equipes</td>";
      echo "<td><b id='col4'><font color='#0b2e59'> ". $campo -> jogEquipe ." jogadores</td>"; 
      echo "<td> <input id='col5' type='radio' name='idCamp' value='".$campo -> idCamp."'>  </td>"; 
			//echo "<b id='col5'><button class='w3-btn w3-white w3-border w3-border-blue w3-round-large'>Alterar </button>   ";
			
			//echo "<a href=''> <p class='botoes'> Abrir Campeonato <p> </a>";
			 // obs.: O script chama um outro programa passando a tarefa adicionar junto com o idproduto
			/* echo "<br><a href='adicionarProduto.php?idproduto=".$campo -> codProduto."&preco=".$campo -> precoProd."'> <p class='botoes'> Adicionar <p></a>";// link compra    */  
			 echo "<br></tr>";// fecha coluna
			 // a cada 6 produtos quebrar linha 
			 if ($col>=4)  
				 { 
				  echo "</td>";// fecha linha
				  $col=0;// inicia contagem
			 } 
		  } // while
	  } //if
} // if    
 echo "</table>";// fecha tabela
 
 ?>
 </form>
  <form action="testandoTabela.php" method="POST">
    <input id="busca" type="text"  name="buscaEvento" size="46" placeholder="Buscar..." required="true">
    <input type="submit" id="btnBusca"  value="Buscar" onclick='eventoAdicionado();'>
  </form>
 </header>
   

  
    
</div>
<footer></footer>
    
    <script src="bootstrap.min.js"></script>
    <script src="Sidebar-Menu.js"></script>
    <script id="bs-live-reload" data-sseport="50600" data-lastchange="1562723494544" src="/js/livereload.js"></script>
</body>

</html>