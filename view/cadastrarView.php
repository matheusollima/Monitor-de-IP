<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
  <div class = "painel">
    <form action="validações/validaCadastrar.php" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome"><br>
    <label for="ip">IP: </label>
    <input type="text" name="ip" id="ip">
    <input type="submit" value="Salvar" name="salvar">
  </form>
  <button><a href="Formulario.php">Ínicio</a></button>
  </div>  
</body>
</html>