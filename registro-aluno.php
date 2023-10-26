<?php

$nome_a = $_POST ['nome_a'];
$cpf_a = $_POST ['cpf_a'];
$dt_nasc_a = $_POST ['data_a'];
$escolaridade_a = $_POST ['escolaridade_a'];
$email_a = $_POST ['email_a'];
$senha_a = $_POST ['senha_a'];
$vinculo_a = $_POST ['vinculo'];

echo "Seu nome é $nome_a.";
echo "<br> Seu CPF é $cpf_a. <br>";
echo "Você nasceu em $dt_nasc_a. <br>";
echo "Você possui o $escolaridade_a como nível de escolaridade. <br>";
echo "Você possui o vinculo de $vinculo_a. <br>";
echo "O email digitado foi $email_a. <br>";
echo "A senha escolhida foi $senha_a. <br>"; 

echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
?>