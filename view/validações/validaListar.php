<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<script>
      function tornarVisivel(id) {  
       var teste = id;
       var div = document.getElementById(id);
       if(div.style.display==='none') {
        div.style.display = 'block';
       } 
      }
      function tornarInvisivel() {
        var div = document.getElementById('cancelarAlt');
        div.style.display = 'none';
      }
      
     </script>
</body>
</html>
<?php
include("C:\\xampp\htdocs\Projeto\controller\ControllerHost.php");
function update(){
  header("Refresh: 0");
}

function listarLista(){
    $listarLista = controllerHost::listarHost();
    
    if($listarLista!=null){
    $total = count($listarLista);

    
    $i = $total-1;

 
    $item = 'ID';
   
    while($i>=0) {
      echo "Nome: " . $listarLista[$i]['Nome'] . "<br>";
      echo "IP: " . $listarLista[$i]['NumeroIP'] . "<br><br>";
    $deveMostrar = true;
    ?>
    <section style = "display: inline"> 
    <div>
    <form action="" method = "post">
    <button type = "submit" value = "<?php  
     $id =  $listarLista[$i]["ID"];
     echo $id;?>"  name = "deletar">Deletar</button>
    </form>   
   </div>
    <div>
    <form action="" method = "post">
     <div class = "painelAlterar" id = "<?php
     $idAlterar = "a" . $listarLista[$i]["ID"];
     $idSalvar = $listarLista[$i]['ID'];
     echo $idAlterar;
     ?>" style = "display: none">
     <label for="nome_host">Nome: </label><input type="text" name = "nome_host"><br>
     <label for="ip_number">IP: </label><input type="text" name = "ip_number">
     <button type= "submit" name = "salvarAlt" value = "<?php echo $idSalvar;?>">Salvar</button>
     <button type="submit" name = "cancelarAlt" onclick = "tornarInvisivel();">Cancelar</button>
     </div>    
    </form>
    </div>
     <div>
     <form action="" method="post">
    <button name = "alterar"  value = "<?php echo $idAlterar;  ?>">Alterar</button>
    </form>  
    </div>
    

    </section>
    <?php
     echo $idAlterar;
     echo "<hr>";
    $i--;
    }

    if(array_key_exists('alterar', $_POST)) {
      $idAlt = $_POST['alterar'];
      ?> 
      <script >
       tornarVisivel('<?php echo $idAlt;   ?>');
      </script>
      
      
      <?php 
    }

   if(isset($_POST['salvarAlt'])) {
    include_once('validaAlterar.php'); 
    $id = $_POST['salvarAlt'];
    $nome_host = $_POST['nome_host'];
    $ip_number = $_POST['ip_number'];
    alterar($id, $nome_host, $ip_number);
    update();
    }


    if(isset($_POST['deletar'])){
     include_once('validaDeletar.php');
     
     $idDeletar = $_POST['deletar'];
     deletar($idDeletar);
     update();
    }

    
  }  

}
?>

