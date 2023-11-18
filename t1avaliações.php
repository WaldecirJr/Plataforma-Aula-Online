<?php
session_start();
include("conexao.php");

if(isset($_GET['deletar'])){

   $id = intval($_GET['deletar']);
   $sql_query = $mysqli ->query("SELECT * FROM avaliacao WHERE ID = '$id'") or die($mysqli->error);
   $avaliacao = $sql_query->fetch_assoc();

   $caminho_avaliacao = $avaliacao['Nome_avaliacao'];

   if(unlink($caminho_avaliacao)){
      $excluir = $mysqli ->query("DELETE FROM avaliacao WHERE ID = '$id'") or die($mysqli->error);
   if($excluir)
   echo "<p>Avaliação excluída com sucesso!!</p>";
   }

}

$targetDirectory = "avaliaçoes/";

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
            $mysqli->query("INSERT INTO avaliacao (Nome_avaliacao, Extensao) VALUES ('$targetFile', '$fileType')") or die($mysqli->error);

            echo "A avaliação ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviada com sucesso.";
        } else {
            echo "Desculpe, houve um erro no envio da sua avaliação.";
        }
    }
}
if (isset($_POST["submit"])) {
    $sql_query = $mysqli ->query("SELECT * FROM avaliacao") or die($mysqli->error);
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
        <title>Avaliação do curso</title>
    </head>
        <body>
            <nav id="menu-h">
            <center>
                        <div class="barra-superior">
                            <ul>
                                <li> <a href="area-professor.php">Home</a></li>
                                    <li> <a href="cursos-prof.php">Cursos ofertados</a></li>
                                    <li> <a href="t1avaliações.php">Área de avaliações</a></li>
                                    <li> <a href="t1.php">Chat com o aluno</a></li>
                                    <li><a href="index.php">Sair</a></li>  
                            </ul>
                        </div>
            </center>
            </nav>
                <section>
                        <fieldset>
                            <legend><b>UPLOAD DE AVALIAÇÃO</b></legend>
                            <form action="t1avaliações.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Enviar avaliação" name="submit">
                        </fieldset>
                    </form>
                </section>
                    <section>
                        <h1>Avaliação enviada</h1>

                            <table border="1" cellpadding="10">
                                <thead>
                                    <th>Avaliação</th>
                                    <th>Data de Envio</th>
                                    <th></th>
                                </thead>
                                    <tbody>
                                        <?php
                                        if ($sql_query && $sql_query->num_rows > 0) {
                                            while ($avaliacao = $sql_query->fetch_assoc()) {
                                        ?>
                                        <tr>
                                        <td><a href="<?php echo $avaliacao['Nome_avaliacao']; ?>"><?php echo $avaliacao['Nome_avaliacao']; ?></td>
                                        <td><?php echo date("d/m/Y H:i", strtotime($avaliacao['Data_upload'])); ?></td>
                                        <th><a href="t1avaliações.php?deletar=<?php echo $avaliacao['ID']; ?>">Deletar</a></th>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                            </table>
                    </section>
                    <br>
                    <section>
                        <h3>RESPOSTA DOS ALUNOS<h3>
                        <br>

                        <?php

                        include("conexao.php");

                        $sql = "SELECT * FROM avaliacao";

                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $resposta = $row["Resposta_aluno"];
                                echo "<p>Resposta do aluno: <a href='$resposta' download>$resposta</a></p>";
                            }
                        } else {
                            echo "Nenhuma avaliação foi enviada e/ou respondida no momento.";
                        }

                        $mysqli->close();
                        ?>
                    </section>
        </body>
</html>