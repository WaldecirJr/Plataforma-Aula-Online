<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    // Verifica se a conexão com o banco de dados foi bem-sucedida
    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }

    // Coleta dados do formulário
    $email_alt = $_POST['email_alt'];
    $senha_alt = $_POST['senha_alt'];
    $senha_alt1 = $_POST['senha_alt1'];

    // Verifica se as senhas coincidem
    if ($senha_alt == $senha_alt1) {
        // Verifica se a nova senha atende aos critérios de segurança (mínimo 8 caracteres, pelo menos uma letra maiúscula e um número)
        if (preg_match('/^(?=.*[A-Z])(?=.*\d).{8,}$/', $senha_alt)) {

            // Atualiza a senha no banco de dados (substitua 'usuarios' e 'senha' com os nomes corretos da tabela e coluna)
            $stmt = $mysqli->prepare("UPDATE usuarios SET senha = '$senha_alt' WHERE email = '$email_alt'");
            if ($stmt->execute()) {
                echo "Senha atualizada com sucesso!";
            } else {
                echo "Erro ao atualizar a senha. Por favor, tente novamente.";
            }
            $stmt->close();
        } else {
            echo "A nova senha não atende aos critérios de segurança.";
        }
    } else {
        echo "Senhas incompatíveis. Por favor, verifique os campos digitados.";
    }
    $mysqli->close();
}
?>