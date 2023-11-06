<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não pode acessar essa página porque não está logado. <p><a href=\"index.php\">Voltar</a></p>");
}
?>
<!DOCTYPE html>
<html>
    <body>
    <style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
    </body>
</html>