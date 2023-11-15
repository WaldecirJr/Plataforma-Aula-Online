<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de Usuário</title>
</head>
<body>
   <form action="registro-cadastro.php" method="post">
      <fieldset>
         <legend><b>CADASTRO DE USUÁRIOS</b></legend>

         Nome: <input type="text" name="nome"/><br>
         CPF: <input type="text" name="cpf"/><br>
         Data de nascimento: <input type="date" name="data_nascimento"/><br>
         Cidade: <input type="text" name="cidade"/> UF: <input type="text" name="estado"/><br>

         Escolha o tipo de conta:
         <select name="tipo_conta" id="tipo_conta">
            <option value="">--Selecione o item desejado--</option>
            <option value="aluno">Aluno</option>
            <option value="professor">Professor</option>
         </select><br>

         <div id="info_aluno" style="display: none;">
            Escolaridade:
            <select name="escolaridade">
               <option value="Ensino médio incompleto">Ensino médio incompleto</option>
               <option value="Ensino médio completo">Ensino médio completo</option>
               <option value="Ensino superior incompleto">Ensino superior incompleto</option>
               <option value="Ensino superior completo">Ensino superior completo</option>
            </select><br>
         </div>

         <div id="info_professor" style="display: none;">
            Escolaridade:
            <select name="escolaridade">
               <option value="Ensino superior completo">Ensino superior completo</option>
               <option value="Especialista">Especialista</option>
               <option value="Mestrado">Mestre</option>
               <option value="Doutorado">Doutor(a)</option>
            </select><br>
            Instituição de formação: <input type="text" name="instituicao"/><br>
            Curso oferecido na plataforma: <input type="text" name="curso"/><br>
         </div>

         Digite um email: <input type="email" name="email"/><br>
         Escolha uma senha: <input type="password" name="senha"/><br>
         Confirme sua senha: <input type="password" name="senha_confirmacao"/><br>

         <input type="submit" value="Cadastrar"/> <a href="index.php">Voltar</a>
      </fieldset>
   </form>

   <script>
      // Função para mostrar/ocultar campos adicionais com base na escolha do usuário
      document.getElementById("tipo_conta").addEventListener("change", function () {
         var tipoConta = this.value;
         var infoAluno = document.getElementById("info_aluno");
         var infoProfessor = document.getElementById("info_professor");

         if (tipoConta === "aluno") {
            infoAluno.style.display = "block";
            infoProfessor.style.display = "none";
         } else if (tipoConta === "professor") {
            infoAluno.style.display = "none";
            infoProfessor.style.display = "block";
         }
      });
   </script>

   <style>
      body {
         background-color: rgb(170, 206, 255);
      }
   </style>
</body>
</html>
