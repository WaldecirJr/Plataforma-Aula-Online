<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cursos</title>
</head>
   <body>
   <nav id="menu-h">
    <center>
                <div class="barra-superior">
                    <ul>
                        <li> <a href="area-aluno.php">Home</a></li>
                            <li> <a href="cursos.php">Cursos matriculados</a></li>
                            <li> <a href="t2respostas.php">Área de avaliações</a></li>
                            <li> <a href="t1.php">Chat com o professor</a></li>
                            <li><a href="index.php">Sair</a></li>  
                    </ul>
                </div>
            </center>
    </nav>

      <h1><b> CURSO MATRICULADO</b></h1>
         <section>
            <?php

               if (!isset($_SESSION['id'])) {
                   echo "Usuário não logado!";
               } else {
                  $userId = $_SESSION['id'];

                  include("conexao.php");

                  $sql = "SELECT Nome, Curso_a FROM usuarios WHERE id = $userId";

                  $resultado = $mysqli->query($sql);

               if ($resultado->num_rows > 0) {
                  $row = $resultado->fetch_assoc();
                     echo "<b>OLÁ, <b>" .$row["Nome"] ."!" ."<br>" ."<br>";
                     echo "Seja muito bem-vindo(a) ao curso " .$row["Curso_a"] ." oferecido na TECH LEARNING! É uma alegria tê-lo(a) conosco nesta jornada de aprendizado. Estamos aqui para fornecer o suporte necessário e incentivar seu progresso em seus estudos. Aproveite cada momento para explorar, absorver conhecimento e expandir suas habilidades! <br>" ."<br>";
                     echo "<br><b>LISTA DE ARQUIVOS DIDÁTICOS DO CURSO:<b>";
               } else {
                     echo "Usuário não está matriculado em nenhum curso.";
               }

                $mysqli->close();
               }
            ?>
         </section>
            <br>
            <section>
               <?php

               include("conexao.php");

               $sql = "SELECT * FROM arquivo";

               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     $nomeArquivo = $row["Nome"];
                     echo "<p>Arquivo: <a href='$nomeArquivo' download>$nomeArquivo</a></p>";
                  }
               } else {
                  echo "Nenhum arquivo encontrado.";
               }

               $mysqli->close();
               ?>
            </section>
   </body>
</html> 