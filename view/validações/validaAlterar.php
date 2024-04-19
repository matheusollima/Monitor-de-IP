<?php
//include("C:\wamp64\www\MonitorDeWifi\Projeto\controller\ControllerHost.php");
include("C:\\xampp\htdocs\Projeto\model\Classes\Host_IP.php");
function listar(){
    $listar = controllerHost::listarHost();
    
    $i = 0;
    while($i<count($listar)){
        echo $listar[$i];
        echo "<hr>";
        $i++;

} echo "<br> <br>";
}

if(array_key_exists('botaoAlterar', $_POST)) {
    $idValue = $_POST['idAlterar'];
    $nomeValue = $_POST['nomeAlterar'];
    $ipValue = $_POST['ipAlterar'];

    alterar($idValue,$nomeValue, $ipValue);
  
} 

function alterar($id, $host_name, $ip_number) {

    $idHost = $id;
    $hostName = $host_name;
    $ipNumber = $ip_number;
    if(!$idHost == null && !$hostName == null && !$ipNumber == null){
    $alterarObj = new host_ip($idHost, $hostName, $ipNumber);
    controllerHost::alterarHost($alterarObj);
    echo "ALTERAÇÃO FEITA COM SUCESSO";
    return true;
 }}


?>