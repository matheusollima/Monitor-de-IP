<?php 
include_once('C:\wamp64\www\MonitorDeWifi\Projeto\view\validações\validaDeletar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
    <link rel = "stylesheet"  href = "estilos/style.css">
</head>
<body>
    
   <div>
   <div class = "painel">
      <?php 
      listar();
      ?>
      
   </div>
   <form action="" method = "post">
    <label for = "idDeletar">ID: </label><input type="text" name="idDeletar" id="">
    <button name = "botaoDeletar">Deletar</button>
   </form>


   </div>




</body>
</html>

<?php 
  

?>