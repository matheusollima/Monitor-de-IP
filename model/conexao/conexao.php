<?php 

$host = "localhost";
$usuario = "matheusOl";
$senha = "M@t5u$1745$$$";
$bdNome = "listaIp";



$novaConexao = new mysqli($host, $usuario, $senha, $bdNome);


if($novaConexao->connect_errno){
    echo "Falha ao conectar";
} 
    
?>