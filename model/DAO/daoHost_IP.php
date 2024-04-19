<?php 



class daoHost_ip{
public $id_host;
public $host_name;
public $ip_number;


public function __construct($novoObj){
    $this->id_host = $novoObj->get_id();
    $this->host_name = $novoObj->get_Host_name();
    $this->ip_number = $novoObj->get_Ip_number();

}

public function novoHost($novoObj){
    include("C:\\xampp\htdocs\Projeto\model\conexao\conexao.php");
    //$adicionarHost = "INSERT INTO hosts (1, host_name, ip_number) VALUES (1, $this->host_name, $this->ip_number); "
  
  $inserir = $novaConexao->query("INSERT INTO hosts(host_name, ip_number) VALUES ('$this->host_name', '$this->ip_number')");
 
 }

public static function listarHost(){
    include("C:\\xampp\htdocs\Projeto\model\conexao\conexao.php");
  
    $selecionar = "SELECT * FROM hosts";
    $lista = $novaConexao->query($selecionar);
    
    if($lista->num_rows == 0){
      echo "Nenhum nome na lista";
    }
    elseif($lista->num_rows >0) {
      
      $i = 0;
     $listar = [];

    
      
    while($row = $lista->fetch_assoc()){
      //echo "<br> ID: ". $row['id'] .  "<br> Nome: " . $row['host_name']. "<br>" . "Número IP: ". $row['ip_number'] . "<br>";
      
      $listar[] = [ "ID"=>$row['id'],"Nome"=>$row['host_name'],"NumeroIP"=>$row['ip_number'] ];

     
     
    }
    return $listar;
    }
     
}

public function alterarHost($alterarObj){
  include("C:\\xampp\htdocs\Projeto\model\conexao\conexao.php");
  $alterar = $alterarObj;
  $this->id_host = $alterar->get_id();
  $this->host_name = $alterar->get_host_name();
  $this->ip_number = $alterar->get_ip_number();
  $verificarSQL = "SELECT * FROM hosts WHERE id = '$this->id_host'";
  $verificar = $novaConexao->query($verificarSQL);
  $alterarSQL = "UPDATE hosts SET host_name = '$this->host_name', ip_number = '$this->ip_number' WHERE id = '$this->id_host';";
  
  if ($verificar->num_rows == 0){
    echo "ID não encontrado";
  }else{
    $alterar = $novaConexao->query($alterarSQL);  
    
      echo "Alteração bem sucedida";
    }

}

public static function deletarHost($id){
  include("C:\\xampp\htdocs\Projeto\model\conexao\conexao.php");
 $idHost = $id;
 $verificarSQL = "SELECT * FROM  hosts WHERE id = '$idHost';";
 $verificar = $novaConexao->query($verificarSQL);
 if (!$verificar->num_rows == 0){
  $deletarSQL = "DELETE FROM hosts WHERE id = '$idHost';";
  $deletar = $novaConexao->query($deletarSQL);}
  else echo "NENHUM ID ENCONTRADO";

}
 
}
?>