<?php
session_start();
include_once("conexao.php");
// Verifica se o formulário foi enviado
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Recebe os dados do formulário
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$tipo_conta = $_POST["tipo_conta"];
$escolaridade = $_POST["escolaridade"];
$instituicao = $_POST["instituicao"];
$curso_a = $_POST["curso_a"];
$curso_p = $_POST["curso_p"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha_confirmacao = $_POST["senha_confirmacao"];


    // Inserir no banco de dados para tabela "usuarios"
$resultado =$mysqli->query("INSERT INTO usuarios (Nome, CPF, Dt_nascimento, Cidade, Estado, Tipo_conta, Escolaridade, Instituicao, Curso_a, Curso_p, Email, Senha) VALUES ('$nome', '$cpf', '$data_nascimento', '$cidade', '$estado', '$tipo_conta', '$escolaridade', '$instituicao', '$curso_a', '$curso_p', '$email', '$senha')");

if ($resultado) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    // Redireciona para a página de sucesso ou outra página apropriada
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado com sucesso</p>";
    // Redireciona para a página de erro ou outra página apropriada
    header("Location: index.php");
    }
}
?>