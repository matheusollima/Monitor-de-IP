<?php
include_once("validações/validaAlterar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <div>

    

<!-- DENTRO DO PAINEL ALTERAR TEM UMA LISTA -->
    <div class = "painel">
    <?php 
     listar();
     ?>
    </div>
    
 
    <form action="" method="post">
    <label for="idAlterar">ID: </label>
    <input type="text" name="idAlterar" id="idAlterar">
    <label for="nomeAlterar">Nome: </label>
    <input type="text" name="nomeAlterar" id="nomeAlterar">
    <label for="ipAlterar">IP: </label>
    <input type="text" name="ipAlterar" id="ipAlterar">
    <button name="botaoAlterar">Salvar Alteração</button></form>
    
    </div>
</body>
</html>


