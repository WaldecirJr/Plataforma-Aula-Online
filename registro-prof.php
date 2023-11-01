<?php
session_start();
include_once("conexao.php");

$nome_p = $_POST['nome_p'];
$cpf_p = $_POST['cpf_p'];
$dt_nasc_p = $_POST['data_p'];
$cidade_p = $_POST['cidade_p'];
$uf_p = $_POST['estado_p'];
$escolaridade_p = $_POST['escolaridade_p'];
$formacao_p = $_POST['faculdade'];
$curso_oferecido = $_POST['curso'];
$email_p = $_POST['email_p'];
$senha_escolhida = $_POST['senha_p'];
$senha_confirmada = $_POST['senha_pp'];

// Executar a consulta SQL para inserir dados no banco de dados
$resultado = $mysqli->query("INSERT INTO professores (Nome, CPF, DT_nascimento, Cidade, Estado, Escolaridade, Instituicão, Curso, Email, Senha) VALUES ('$nome_p', '$cpf_p', '$dt_nasc_p', '$cidade_p', '$uf_p', '$escolaridade_p', '$formacao_p', '$curso_oferecido', '$email_p', '$senha_escolhida')");

if ($resultado) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    // Redirecionar para a página de sucesso ou outra página apropriada
    header("Location: registro.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado com sucesso</p>";
    // Redirecionar para a página de erro ou outra página apropriada
    header("Location: index.php");
}
?>
