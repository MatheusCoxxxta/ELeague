<html>
<body>
<?php
  // inicia sessão
  session_start();
  // cria variável para saber quantos foram selecionados
  if (isset($_SESSION["contador"])) $contador=$_SESSION["contador"];
  else
      $contador=0;
  // incrementa contador para próximo produto a ser adicinado
  $contador++;	
 
   // obtém id do produto 
   if (isset($_GET["codEquipe"])) $codEquipe=$_GET["codEquipe"];
  else{
		 $codEquipe="?"; 
		 $contador=0;	
	}
	
	if (isset($_GET["precoProd"])) $preco=$_GET["precoProd"];
	else $preco = 0;
     

  if ($contador>0){
	  // cria variável na sessão -individual para cada seleção
	  $indice = "'produto$contador'";
	  // relaciona variável com idproduto
	  $_SESSION[$indice]=$codEquipe;
	  //atualiza sessão
	  $_SESSION["contador"]=$contador;

	  
	  // lista selecionados
	 
	  echo "Produto adicionado!<p>";
	  
	}  //if
  
             
  
?>
<center><input type="button" value="Finalizar" onclick="window.location='verEquipe.php'" /></center>
</body>
</html>






