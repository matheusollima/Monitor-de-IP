<?php 
include('../model/DAO/daoHost_IP.php');

class controllerHost {

public $novoHost;

public function novoHost($objHost){
    $this->novoHost = $objHost;
   
    $daoHost = new daoHost_IP($this->novoHost);
    $daoHost->novoHost($this->novoHost);
     
}

public static function listarHost(){
 
 return daoHost_ip::listarHost();
}

public static function alterarHost($alterarObj) {
  $alterar = $alterarObj;
  $id = $alterar->get_id();
  $host_name = $alterar->get_host_name();
  $ip_number = $alterar->get_ip_number();
  
  $alterarDAO = new daoHost_ip($alterar);
  $alterarDAO->alterarHost($alterar);

}

public static function deletarHost($id){
  $idHost = $id;
  daoHost_ip::deletarHost($idHost);
}



}











?>