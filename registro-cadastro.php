<?php
session_start();
include_once("conexao.php");
// Verifique se o formulário foi enviado
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Receba os dados do formulário
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$tipo_conta = $_POST["tipo_conta"];
$escolaridade = $_POST["escolaridade"];
$instituicao = $_POST["instituicao"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha_confirmacao = $_POST["senha_confirmacao"];


    // Exemplo de inserção no banco de dados para uma tabela "usuarios"
$resultado =$mysqli->query("INSERT INTO usuarios (Nome, CPF, Dt_nascimento, Cidade, Estado, Tipo_conta, Escolaridade, Instituicao, Curso, Email, Senha) VALUES ('$nome', '$cpf', '$data_nascimento', '$cidade', '$estado', '$tipo_conta', '$escolaridade', '$instituicao', '$curso', '$email', '$senha')");

if ($resultado) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    // Redirecionar para a página de sucesso ou outra página apropriada
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado com sucesso</p>";
    // Redirecionar para a página de erro ou outra página apropriada
    header("Location: index.php");
    }
}
?>