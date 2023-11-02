<?php
session_start();

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

   if(strlen($_POST['email']) == 0){
      echo "Preencha seu email";
   }else if(strlen($_POST['senha']) == 0){
      echo "Preencha sua senha";
   }else{

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execucão do código SQL: ". $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1){

         $usuario = $sql_query->fetch_assoc();

         if(isset($_SESSION)){
            session_start();
         }

         $_SESSION['id'] = $usuario['id'];
         $_SESSION['nome'] = $usuario['nome'];

         header("Location: area-usuario.php");

      }else{
         echo "Falha ao logar! Email ou senha incorretos.";
      }
   }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TECH LEARNIG</title>
</head>
<body>
         <?php
            if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
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