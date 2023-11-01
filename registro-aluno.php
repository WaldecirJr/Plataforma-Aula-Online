<?php
session_start();  
include_once("conexao.php");

$nome_a = $_POST['nome_a'];
$cpf_a = $_POST['cpf_a'];
$dt_nasc_a = $_POST['data_a'];
$escolaridade_a = $_POST['escolaridade_a'];
$cidade_a = $_POST['cidade_a'];
$uf_a = $_POST['estado_a'];
$email_a = $_POST['email_a'];
$senha_escolhida = $_POST['senha_a'];
$senha_confirmada = $_POST ['senha_aa'];

$resultado = $mysqli ->query ("INSERT INTO alunos (Nome, CPF, DT_nascimento, Escolaridade, Cidade, Estado, Email, Senha) VALUES ('$nome_a', '$cpf_a', '$dt_nasc_a', '$escolaridade_a', '$cidade_a', '$uf_a', '$email_a', '$senha_escolhida')") or die($mysqli->error);

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
