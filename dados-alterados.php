<?php

$email_alt = $_POST['email_alt'];
$senha_alt = $_POST['senha_alt'];
$senha_alt1 = $_POST['senha_alt1'];

if($senha_alt == $senha_alt1){
    echo "Senha atualizada com sucesso!";
}else{
    echo "Senhas incompatíveis. Por favor, verifique os campos digitados.";
}

echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
?>