<?php 
include_once('C:\wamp64\www\MonitorDeWifi\Projeto\controller\ControllerHost.php');

function listar(){
    $listar = controllerHost::listarHost();
    
    $i = 0;
    while($i<count($listar)){
        echo $listar[$i];
        echo "<hr>";
        $i++;

} echo "<br> <br>";
}



function deletar($id) {
    $idHost = $id;
    echo $id;
   if(!$idHost==null){
     controllerHost::deletarHost($idHost);
   }


}

if(array_key_exists("botaoDeletar", $_POST)){
    $idDeletar = $_POST['idDeletar'];
    deletar($idDeletar);
    
}






?>