<?php
try {
    $dns = "mysql:dbname=chatsimples;host=localhost";
    $user = "root";
    $password = "";
    $pdo = new PDO($dns, $user, $password);
} catch (PDOException $e) {
    echo "Falha: ". $e->getMessage();
}

?>