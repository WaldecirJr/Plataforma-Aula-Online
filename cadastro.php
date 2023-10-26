<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de usuários</title>
</head>
<body>
   <form action="registro.php" method="post">
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
    Digite um email: <input type="email" name="email_a"/> </br>
    Escolha uma senha: <input type="password" name="senha_a"/> </br>
    Selecione seu vinculo:
    <select name="vinculo">
        <option value="">--Selecione o item desejado--</option>
        <option value="Aluno">Aluno</option>
    </select>
    </fieldset>
    <input type="submit"value="Enviar"/>
    <br>
    <fieldset>
        <legend><b>CADASTRO DE PROFESSORES</b></legend>
    Nome: <input type="text" name="nome_p"/> </br>
    CPF: <input type="text" name="cpf_p"/> </br>
    Data de nascimento: <input type="date" name="data_p"/> </br>
    Escolaridade: 
    <select name="escolaridade_p">
        <option value="">--Selecione o item desejado--</option>
        <option value="Ensino superior completo">Ensino superior completo</option>
        <option value="Especialista">Especialista</option>
        <option value="Mestre">Mestre</option>
        <option value="Doutor(a)">Doutor(a)</option>
    </select>
    <br>
    Digite um email: <input type="email" name="email_p"/> </br>
    Escolha uma senha: <input type="password" name="senha_p"/> </br>
    Selecione seu vinculo:
    <select name="vinculo">
        <option value="">--Selecione o item desejado--</option>
        <option value="Professor">Professor</option>
    </select>
    </fieldset>
    <input type="submit"value="Enviar"/>
</form>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
</body>
</html>