<?php 


class host_ip {
 public $id_host;
 public $host_name;
 public $ip_number;

 public $host_status;


 public function __construct($id, $name, $number) {
  $this->id_host = $id;
  $this->host_name = $name;
  $this->ip_number = $number; 

 }

public function set_id($idHost) {
   $this->id = $idHost;
}

public function get_id(){
   return $this->id_host;
}

 public function set_host_name($hostName) {
    $this->host_name = $hostName; 
 }
 public function get_host_name() {
   return $this->host_name;
 }

 public function set_ip_number($ipNumber) {
    $this->ip_number = $ipNumber;
 }

 public function get_ip_number() {
    return $this->ip_number;
 }

 public function set_host_status($host_status){
   $this->host_status = $host_status;
 }

 public function get_host_status() {
   return $this->host_status;
 }




}


?>