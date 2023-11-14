<?php
include ('index1.php');
include ('upload.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
</head>
<body>

 <h1><b> Curso Disponível</b></h1>
 <br>
 <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg">
 <section>
            <form action="t1.php">
            <input type="submit" value="Ir para chat" />
            </form>
    
            <p><a href="logout.php">Sair</a></p>

                </section>
 <style>
      body {
         background-color: rgb(170, 206, 255);
      }
   </style>
</body>
</html> 