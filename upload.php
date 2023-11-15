<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivos</title>
</head>
<body>
    <form action="conexao.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Enviar Arquivo" name="submit">
    </form>
</body>
</html>

<?php
include("conexao.php");
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
            $mysqli ->query("INSERT INTO arquivo (nome, path) VALUES ('$targetFile','$fileType')" or die ($mysqli->error));
            echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso.";
        } else {
            echo "Desculpe, houve um erro no envio do seu arquivo.";
        }
    }
}
$sql_query = $mysqli ->query("SELECT * FROM arquivo") or die($mysqli->error);
?>
