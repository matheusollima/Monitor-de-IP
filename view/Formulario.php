<?php 
include("../controller/ControllerHost.php");
include("../model/classes/Host_IP.php");



if(isset($_POST['deletarS'])) {
  $id = $_POST['id'];
  deletar($id);
}



if(isset($_POST['enviar'] )){
    $id = $_POST['id'];
    $host_name = $_POST['host_name'];
    $ip_number = $_POST['ip_number'];
    alterar($id, $host_name, $ip_number);
}


if (isset($_POST['adicionar'])){
   $host_name = $_POST['host_name'];
   $ip_number = $_POST['ip_number']; 
    cadastrar(0,$host_name, $ip_number);

}



function cadastrar($id, $host_ip, $ip_number){

   

    $novoIP = new host_ip($id,$host_ip, $ip_number);
    $controlIP = new controllerHost();
    $controlIP->novoHost($novoIP);

}

function listar(){
    $listar = controllerHost::listarHost();
    
    $i = 0;
    while($i<count($listar)){
        echo $listar[$i];
        echo "<hr>";
        $i++;

} echo "<br> <br>";}


function alterar($id, $host_name, $ip_number) {
    ?><form action="Formulario.php" method="POST">
    <label for = "id">ID: </label> <input type="text" name="id">
    <label for="host_name">Nome: </label> <input type="text" name="host_name" id="">
    <label for="ip_number">Número do IP: </label> <input type="text" name="ip_number" id="">
    <input type="submit" value="enviar" name="enviar">
   </form>
   <?php 
   listar();
   $idHost = $id;
   $hostName = $host_name;
   $ipNumber = $ip_number;
   if(!$idHost == null && !$hostName == null && !$ipNumber == null){
   $alterarObj = new host_ip($idHost, $hostName, $ipNumber);
   
   controllerHost::alterarHost($alterarObj);
   alterar(null,null,null);  
}
}  


function deletar($id) {
    ?><form action="Formulario.php" method="POST">
    <label for = "id">ID: </label> <input type="text" name="id">
    <input type="submit" value="deletarS" name="deletarS">
   </form>

   <?php 
   listar();

    $idHost = $id;
    echo $id;
   if(!$idHost==null){
     controllerHost::deletarHost($idHost);
   }


}



if(array_key_exists('listar', $_POST)) { 
    listar();
    

}


if(array_key_exists('alterar', $_POST)) {
   
    alterar(null,null,null);
} 


if(array_key_exists('deletar', $_POST)){
    deletar(null);
}




/*Cadastrar();
$ler = ler();

echo "<br>"; */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Formulario.php" method="POST">
        <label for="host_name">Nome</label><input type = "text" name = "host_name">
        <label for="ip_number">IP</label><input type="text" name="ip_number" id="">
        <input type="submit" value="Adicionar" name="adicionar">
    </form>
    <form method='POST'>
    <input type="submit" name="listar"
				class="button" value="listar" />
    </form>

    <form action="" method="POST">
        <input type="submit" value="Alterar" name = 'alterar'>

    </form>
    <form action="" method="POST">
        <input type="submit" value="Deletar" name = 'deletar'>

    </form>
    
</body>
</html>

