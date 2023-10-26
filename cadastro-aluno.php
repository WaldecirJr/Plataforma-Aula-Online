<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de usuários</title>
</head>
<body>
   <form action="registro-aluno.php" method="post">
    <fieldset>
        <legend><b>CADASTRO DE ALUNOS</b></legend>
    Nome: <input type="text" name="nome_a"/> </br>
    CPF: <input type="text" name="cpf_a"/> </br>
    Data de nascimento: <input type="date" name="data_a"/> </br>
    Escolaridade: 
    <select name="escolaridade_a">
        <option value="">--Selecione o item desejado--</option>
        <option value="Ensino médio incompleto">Ensino médio incompleto</option>
        <option value="Ensino médio completo">Ensino médio completo</option>
        <option value="Ensino superior incompleto">Ensino superior incompleto</option>
        <option value="Ensino superior completo">Ensino superior completo</option>
    </select>
    <br>
    Selecione seu vinculo:
    <select name="vinculo">
        <option value="">--Selecione o item desejado--</option>
        <option value="Aluno">Aluno</option>
    </select>
    <br>
    Digite um email: <input type="email" name="email_a"/> </br>
    Escolha uma senha: <input type="password" name="senha_a"/> </br>
    <input type="submit"value="Enviar"/> <a href="index.php">Voltar</a>
</form>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
</body>
</html>