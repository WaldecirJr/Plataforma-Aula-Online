<?php
include("conexao.php");

if(isset($_GET['deletar'])){

   $id = intval($_GET['deletar']);
   $sql_query = $mysqli ->query("SELECT * FROM arquivo WHERE ID = '$id'") or die($mysqli->error);
   $arquivo = $sql_query->fetch_assoc();

   $caminho_arquivo = $arquivo['Nome'];

   if(unlink($caminho_arquivo)){
      $excluir = $mysqli ->query("DELETE FROM arquivo WHERE ID = '$id'") or die($mysqli->error);
   if($excluir)
   echo "<p>Arquivo excluído com sucesso!!</p>";
   }

}

$targetDirectory = "arquivo/";

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

    
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
    && $fileType != "gif"  && $fileType != "pdf" && $fileType != "mp4") {
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG, GIF, PDF e MP4 são permitidos.";
        $uploadOk = 0;
    }

   
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não pôde ser enviado.";
    } else {
        
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            $mysqli->query("INSERT INTO arquivo (Nome, Extensao) VALUES ('$targetFile', '$fileType')") or die($mysqli->error);

            echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso.";
        } else {
            echo "Desculpe, houve um erro no envio do seu arquivo.";
        }
    }
}
if (isset($_POST["submit"])) {
    $sql_query = $mysqli ->query("SELECT * FROM arquivo") or die($mysqli->error);
}else{
    $sql_query = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Upload de Arquivos</title>
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
   <h1><b> CURSO OFERTADO</b></h1>
 <br>
 <?php
session_start();

if (!isset($_SESSION['id'])) {
    echo "Usuário não logado!";
} else {
    $userId = $_SESSION['id'];

    include("conexao.php");

    $sql = "SELECT Nome, Curso_p FROM usuarios WHERE id = $userId";

    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        echo "<b>OLÁ PROFESSOR(A), <b>" .$row["Nome"] ."." ."<br>" ."<br>";
        echo "Seja muito bem-vindo(a) a TECH LEARNING! É uma alegria tê-lo(a) conosco nesta jornada. Estamos aqui para fornecer o suporte necessário e incentivar nossos alunos ao progresso em seus estudos. Aproveite cada momento para explorar e repassar conhecimento de suas habilidades!! <br>" ."<br>";
        echo "<br><b>VOCÊ ESTÁ LECIONANDO: <b>".$row["Curso_p"];
    } else {
        echo "Usuário não está oferecendo nenhum curso.";
    }

    $mysqli->close();
}
?>
   </section>
   <br>
   <section>
   <fieldset>
        <legend><b>UPLOAD DE ARQUIVOS</b></legend>
        <form action="cursos-prof.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Enviar Arquivo" name="submit">
    </form>
    </fieldset>
   </section>
   <section>
    <h1>Lista de arquivos</h1>

    <table border="1" cellpadding="10">
        <thead>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th></th>
        </thead>
        <tbody>
            <?php
            if ($sql_query && $sql_query->num_rows > 0) {
                while ($arquivo = $sql_query->fetch_assoc()) {
            ?>
            <tr>
               <td><a href="<?php echo $arquivo['Nome']; ?>"><?php echo $arquivo['Nome']; ?></td>
               <td><?php echo date("d/m/Y H:i", strtotime($arquivo['Data_upload'])); ?></td>
               <th><a href="cursos-prof.php?deletar=<?php echo $arquivo['ID']; ?>">Deletar</a></th>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
   </section>
</body>
</html>