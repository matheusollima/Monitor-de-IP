<?php 
include_once('../../controller/ControllerHost.php');
include_once('../../model/Classes/Host_IP.php');

if (isset($_POST['salvar'])){
 $id = 1;
 $nome = $_POST['nome'];
 $ip = $_POST['ip'];


 $novoHost = new host_ip($id, $nome, $ip);
 $novoHostControl = new controllerHost;
 $novoHostControl->novoHost($novoHost);
 $_POST['salvar'] = array();
 header('Location: ../cadastrarView.php'); 
}














?>