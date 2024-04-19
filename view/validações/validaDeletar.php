<?php 
include_once('C:\xampp\htdocs\Projeto\controller\ControllerHost.php');

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
   if(!$idHost==null){
     controllerHost::deletarHost($idHost);
   }


}

if(array_key_exists("botaoDeletar", $_POST)){
    $idDeletar = $_POST['idDeletar'];
    
    deletar($idDeletar);
    
}






?>