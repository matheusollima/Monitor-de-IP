<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor de IP</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <div class = "painel">

      <!---<button name ="rastrear"><a href="rastrearView.php">Rastrear</a></button>-->
      
      <form action="" method="post">
      <button name = "cadastrar"><a href="cadastrarView.php">Cadastrar</a></button>
      <button name = "listar"><a href = "listarView.php">Listar</a></button>  
      <button name= "rastrear">Rastrear</button>
      </form>
      <?php 
   //include('C:\wamp64\www\MonitorDeWifi\Projeto\frontend\monitordewifi\src\app\app.component.html');
   include('C:\xampp\htdocs\Projeto\testes\testeRastrear.php');


   if(array_key_exists('rastrear', $_POST)){
    echo "<br>";
    abrirCMD();
   }
  ?>  

    </div>


</body>
</html>