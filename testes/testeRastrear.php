<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="conectado.js"></script>
</head>
<body>
    
</body>
</html>
<?php 
function abrirCMD() {
   
    $saida = shell_exec('C:\xampp\htdocs\Projeto\testes\scan.py');
    $array = json_decode($saida);
    $conectado = false;
    foreach($array as $lista){
     echo $lista;  ?> <button>Salvar</button>
     <?php
     echo "<br><hr>";
     if($lista == "192.168.248.1"){
        $conectado = true;
    }

   }
   if($conectado == true){
    echo '<script type="text/javascript> conectado(); </script>';

   }
   echo $conectado;
  
    //echo gettype($saida);
    
  /* $texto = file("C:\\Users\\mathe\\Desktop\\resultado.txt");
  
    foreach($texto as $listar ){
        $lista [] = $listar;
    }
    $tamanho = count($lista);
    $i = 0;
    while($i<=$tamanho-1){
        echo $lista[$i] . "<br>";
        $i++;
    } */
}









?>