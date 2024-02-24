<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor WIFI prototipo 0.0</title>
 <link rel="stylesheet" href="styles.css">

</head>
<body>
<h1 id="h1">Monitor Wifi</h1><br>
<p>TESTE MONITOR WIFI PROTOTIPO 0.0</p><br> 

<!-- INPUTS DOS IPS -->
<div id="inputs" style="text-align:center;"> 
<form action="Prototipo_0.0.php" method = "POST"  id="inputPainel"> 
  
  
<div style="text-align:center;">
  <section style="display:flex; text-align:center;">
  <div id="ipGatewayInput" style="display:block; text-align:center;">
    <p  style="text-align:center;"><label for="ipGateway" >Ip do gateway</label></p>  
    <p  style="text-align:center;"><input type="text" name="ipLan" id="ipLan"></p> 
</div>
  <div id="range1" style="display:block;">
    <p id = "range1Label"  style="text-align:center;"><label for="ipRange1">Inicio</label></p>
    <p id = "range1Input"  style="text-align:center;"><input type="text" id = "ipRange1" name="ipRange1"></p>
</div>
  <div id= "range2" style="display:block; text-align:center;">
    <p id= "range2Label"  style="text-align:center;"><label for="ipRange2">Término</label></p>
    <p  style="text-align:center;"><input type="text" id = "ipRange2" name="ipRange2"></p>
</div>
  </section>
  </div> 
  

  <p id="texto"></p>
  
  <input type="submit" value="OK" name= "submit">  
  
</form> 

</div> 

<?php

if(isset($_POST["submit"])){
$ipLan = $_POST["ipLan"];
$inicio = $_POST["ipRange1"];
$termino = $_POST["ipRange2"];
$array = array();

for($i = $inicio; $i<=$termino; $i++){
 $array[] = substr($ipLan,0,9) . "." . $i;
}
$qtd = count($array);
global $ips;

for($cont=0; $cont<$qtd; $cont++){
  global $ips;
   $ips = $ips ." " . $array[$cont];



}

$criarArquivoBAT = fopen("Rastrear_Ping.bat", "w");
$codeTXT = "@echo off

setlocal enabledelayedexpansion

set IPs= " . $ips . "



for %%i in (%IPs%) do (

ping -n 1 -w 4 %%i | find \"Resposta\" >> ping_results.txt

)";
$salvarTXT = fwrite($criarArquivoBAT, $codeTXT);
fclose($criarArquivoBAT);
system("cmd /c Rastrear_Ping.bat");
$ping_results = file("ping_results.txt");
?>

<!--- PAINEL DE EXIBIÇÃO DOS IP ------>
<div id="painelIP">
<b><p id = ipGatewayTxt>
<?php
echo "IP do Gateway: ". $ipLan;

?>
</p><b>
<?php
echo "<pre>";
$listaIp = file("ping_results.txt");
foreach($listaIp as $listarIp){
  ?><input disabled value = " <?php
  echo substr($listarIp, 12, 13); ?> "> <?php
  echo "<br>";
}
echo "</pre>";
unlink('Rastrear_Ping.bat');
unlink('ping_results.txt');
unset($_POST);


////////////////////////      Exibir Array        //////////////////////////////////////////////////////////
/*$qtd = count($array);
$b = 0;
while ($b<$qtd){
echo $array[$b] . "<br>";
$b++;
} */
}

?>
</div>
</body>
</html>




<script>
    var input = document.getElementById("ipLan");
    var texto = document.getElementById("texto");
    input.addEventListener("input", function(){
    var valor = input.value;
    texto.innerHTML = valor;
   })
  </script>
