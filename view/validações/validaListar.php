<?php
include("C:\wamp64\www\MonitorDeWifi\Projeto\controller\ControllerHost.php");
function listar(){
    $listar = controllerHost::listarHost();
    
    $i = 0;
    while($i<count($listar)){
        echo $listar[$i];
        echo "<hr>";
        $i++;

} echo "<br> <br>";
}




?>