<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de usuários</title>
</head>
<body>
   <form action="registro-prof.php" method="post">
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
        <option value="Mestrado">Mestre</option>
        <option value="Doutorado">Doutor(a)</option>
    </select>
    <br>
    Instituicão de formacão: <input type="text" name="faculdade"/><br>
    Selecione seu vinculo:
    <select name="vinculo">
        <option value="">--Selecione o item desejado--</option>
        <option value="Professor">Professor</option>
    </select>
    <br>
    Digite um email: <input type="email" name="email_p"/> </br>
    Escolha uma senha: <input type="password" name="senha_p"/> </br>
    </fieldset>
    <input type="submit"value="Enviar"/> <a href="index.php">Voltar</a>
</form>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
</body>
</html>