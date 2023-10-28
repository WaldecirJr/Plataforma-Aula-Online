<?php
session_start();  
include_once("conexao.php");

$nome_p = $_POST ['nome_p'];
$cpf_p = $_POST ['cpf_p'];
$dt_nasc_p = $_POST ['data_p'];
$cidade_p = $_POST ['cidade_p'];
$uf_p = ['estado_p'];
$escolaridade_p = $_POST ['escolaridade_p'];
$formacao_p = $_POST ['faculdade'];
$curso_oferecido = $_POST ['curso'];
$email_p = $_POST ['email_p'];
$senha_escolhida = $_POST ['senha_p'];
$senha_confirmada = $_POST ['senha_pp'];

$mysqli ->query ("INSERT INTO professores (Nome, CPF, DT_nascimento, Cidade, Estado, Escolaridade, Instituicão, Curso, Email, Senha) VALUES ('$nome_p', '$cpf_p', '$dt_nasc_p', '$cidade_a', '$uf_a' '$escolaridade_a', '$formacao_p', '$curso_oferecido', '$email_p', '$senha_escolhida')") or die($mysqli->error);

if (mysqli_insert_id($mysqli)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado com sucesso</p>";
    header("Location: index.php");
}
?>
