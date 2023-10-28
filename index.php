<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TECH LEARNIG</title>
</head>
<body>
   <form action="area-usuario.php" method="post">
     <label for="nome"></label>
     <div class="container"><center> <img src="https://media.istockphoto.com/id/1143672593/pt/vetorial/online-testing-and-assessment-quality-monitoring.jpg?s=612x612&w=0&k=20&c=o91bvKRi1deHwBiw29Pl6c9PABhx7crkeMqLoBcRmWs=" width="500" heigth="205"/> </center> </div>

<p> <center> <b>Login</b> : <input type="email"name="login"/> </center> 
   <br>
 <center>  <b>Senha</b> : <input type="password"name="senha"/></center>
  <br>
 <p> <center>   <button type="submit">Entrar</butoon></center> </p>
 <center> <a href="alterar-senha.php">Esqueceu a senha?</a></center>                            
<br>
<center> Aluno, ainda não tem cadastro?<a href="cadastro-aluno.php"> Cadastre-se aqui!</a></center> 
<br>
<center> Professor, ainda não tem cadastro?<a href="cadastro-prof.php"> Cadastre-se aqui!</a></center> 
</form>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
</body>
</html>

<?php
include ("conexao.php");
?>