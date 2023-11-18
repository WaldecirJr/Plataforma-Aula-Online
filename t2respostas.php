<?php
session_start();
include("conexao.php");

$targetDirectory = "avaliacoes/";

if(isset($_POST["submit"])) {
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    
    if (file_exists($targetFile)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

  
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Desculpe, o arquivo é muito grande.";
        $uploadOk = 0;
    }

    
    if($fileType != "pdf" && $fileType != "txt") {
        echo "Desculpe, apenas arquivos PDF e TXT são permitidos.";
        $uploadOk = 0;
    }

   
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não pôde ser enviado.";
    } else {
        
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            $userId = $_SESSION['id'];
            $mysqli->query("INSERT INTO avaliacao (Resposta_aluno, Extensao_res, Usuario_id, Data_upload) VALUES ('$targetFile', '$fileType', '$userId', NOW())") or die($mysqli->error);


            echo "O envio da avaliação ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi relizadoa com sucesso.";
        } else {
            echo "Desculpe, houve um erro no envio da sua avaliação.";
        }
    }
}
if (isset($_POST["submit"])) {
    $sql_query = $mysqli->query("SELECT * FROM avaliacao WHERE Usuario_id = '{$_SESSION['id']}'") or die($mysqli->error);
}else{
    $sql_query = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Avaliações</title>
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
                     echo "Seja muito bem-vindo(a) a área de avaliação do nosso curso de " .$row["Curso_a"] ." oferecido na TECH LEARNING! É uma alegria tê-lo(a) conosco nesta jornada de aprendizado. <br>" ."<br>";
                     echo "<br><b>AVALIAÇÃO DO CURSO:<b>";
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

               $sql = "SELECT * FROM avaliacao";

               $result = $mysqli->query($sql);

               if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                     $nomeAvaliacao = $row["Nome_avaliacao"];
                     echo "<p>Avaliação: <a href='$nomeAvaliacao' download>$nomeAvaliacao</a></p>";
                  }
               } else {
                  echo "Nenhuma avaliação disponível no momento.";
               }

               $mysqli->close();
               ?>
            </section>
               <br>
               <section>
                    Envie abaixo sua resposta. Lembre-se, responda as questões com calma e coloque em prática o que você aprendeu ao longo do curso!
                        <fieldset>
                            <legend><b>UPLOAD DE RESPOSTA</b></legend>
                            <form action="t2respostas.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Enviar avaliação" name="submit">
                        </fieldset>
                    </form>
                </section>
                    <br>
                    <section>
    <h1>Respostas enviadas</h1>
    <table border="1" cellpadding="10">
        <thead>
            <th>Resposta</th>
            <th>Data de Envio</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            if ($sql_query && $sql_query->num_rows > 0) {
                while ($avaliacao = $sql_query->fetch_assoc()) {
                    $timestamp = strtotime($avaliacao['Data_upload']);
                    ?>
                    <tr>
                        <td>
                            <a href="<?php echo $avaliacao['Resposta_aluno']; ?>" download>
                                <?php echo $avaliacao['Resposta_aluno']; ?>
                            </a>
                        </td>
                        <td><?php echo date("d/m/Y H:i:s", strtotime($avaliacao['Data_upload'])); ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>Nenhuma resposta enviada.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</section>

   </body>
</html> 