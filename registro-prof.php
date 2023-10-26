<?php

$nome_p = $_POST ['nome_p'];
$cpf_p = $_POST ['cpf_p'];
$dt_nasc_p = $_POST ['data_p'];
$escolaridade_p = $_POST ['escolaridade_p'];
$formacao_p = $_POST ['faculdade'];
$email_p = $_POST ['email_p'];
$senha_p = $_POST ['senha_p'];
$vinculo_p = $_POST ['vinculo'];

echo "Seu nome é $nome_p.";
echo "<br> Seu CPF é $cpf_p. <br>";
echo "Você nasceu em $dt_nasc_p. <br>";
echo "Você possui o $escolaridade_p como nível de escolaridade. <br>";
echo "Você se formou na(o) $formacao_p. <br>";
echo "Você possui o vinculo de $vinculo_p. <br>";
echo "O email digitado foi $email_p. <br>";
echo "A senha escolhida foi $senha_p. <br>";

echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
?>
