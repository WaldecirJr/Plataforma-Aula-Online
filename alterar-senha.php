<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados</title>
</head>
<style>
   body{
     background-color: rgb(170, 206, 255);
  }
</style>
<body>
    <form action="dados-alterados.php" method="post">
        <fieldset>
            <legend>ALTERE SEUS DADOS DE ACESSO AQUI</legend>
        Digite seu email: <input type="email" name="email_alt"/> </br>
        Escolha uma nova senha: <input type="password" name="senha_alt"/> </br>
        Confirme a nova senha: <input type="password" name="senha_alt1"/> </br>
        </fieldset>
        <input type="submit"value="Enviar"/> <a href="index.php">Voltar</a>
    </form>
</body>
</html>