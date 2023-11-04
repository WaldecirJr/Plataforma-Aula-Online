<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do usuário</title>
</head>
<body>
    <h1>Bem vindo, a <b>TECH LEARNIG</b>!<?php echo $_SESSION['nome']; ?>.</h1>
    <h1>CODIFICAR O AMBIENTE DO PROFESSOR</h1> </br>
    <h1>CODIFICAR O AMBIENTE DO ALUNO</h1>

<form action="t1.php">
    <input type="submit" value="Ir para chat" />
</form>
    
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
</html>
