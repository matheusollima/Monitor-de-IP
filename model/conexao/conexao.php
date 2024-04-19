<?php 

$host = "localhost:3308";
$usuario = "matheusOl";
$senha = "M@t5u$1745$$$";
$bdNome = "listaip";



$novaConexao = new mysqli($host, $usuario, $senha, $bdNome);


if($novaConexao->connect_errno){
    echo "Falha ao conectar";
} else 
 
    
?>