<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 600px;
            overflow-y: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        button {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4caf50;
        }
    </style>
</head>
<body>

<form action="t2respostas.php" method="post">
    <label for="q1">1. O que é HTML?</label>
    <br>
    <input type="radio" name="q1" value="a">a) HyperText Markup Language</input> 
    <br>
    <br>
    <input type="radio" name="q1" value="b">b) Linguagem de Marcação de Hipertexto</input>
    <br>
    <br>
    <input type="radio" name="q1" value="c">c) Ambas as opções estão corretas</input>
    <br>
    <br>
    <br>

    <label for="q2">2. Como você faz um comentário de uma linha em PHP?</label>
    <br>
    <input type="radio" name="q2" value="a">a) # Comentário</input>
    <br>
    <br>
    <input type="radio" name="q2" value="b">b) // Comentário</input>
    <br>
    <br>
    <input type="radio" name="q2" value="c">c) !comentario </input>
    <br>
    <br>
    <br>

    <label for="q3">3. O que significa PHP?</label>
    <br>
    <input type="radio" name="q3" value="a">a) Preprocessed Hypertext Page</input>
    <br>
    <br>
    <input type="radio" name="q3" value="b">b) Personal Home Page</input>
    <br>
    <br>
    <input type="radio" name="q3" value="c">c) PHP Hypertext Preprocessor</input>
    <br>
    <br>
    <br>

    <label for="q4">4. Qual é a extensão padrão de um arquivo PHP?. </label>
    <br>
    <input type="radio" name="q4" value="a">a) .ph</input>
    <br>
    <br>
    <input type="radio" name="q4" value="b">b) .php</input><br>
    <br>
    <input type="radio" name="q4" value="c">c) .html</input>
    <br>
    <br>
    <br>
    
    <label for="q5">5. Qual é o significado de $_POST em PHP?</label>
    <br>
    <input type="radio" name="q5" value="a">a) Uma variável global usada para coletar dados de um formulário enviado via método HTTP POST </input>
    <br>
    <br>
    <input type="radio" name="q5" value="b">b) Uma variável de ambiente </input>
    <br>
    <br>
    <input type="radio" name="q5" value="c">c)  Uma variável global usada para coletar dados de um formulário enviado via método HTTP GET </input>
    <br>
    <br>
    <br>

    <label for="q6">6. Qual função em PHP é usada para gerar uma saída para o navegador?.</label>
    <br>
    <input type="radio" name="q6" value="a">a) output() </input>
    <br>
    <br>
    <input type="radio" name="q6" value="b">b) print() </input>
    <br>
    <br>
    <input type="radio" name="q6" value="c">c) echo </input>
    <br>
    <br>
    <br>

    <label for="q7">7. Como você declara uma variável em PHP?</label>
    <br>
    <input type="radio" name="q7" value="a">a) $variableName = 5; </input>
    <br>
    <br>
    <input type="radio" name="q7" value="b">b) var variableName; </input>
    <br>
    <br>
    <input type="radio" name="q7" value="c">c) variableName = 5; </input>
    <br>
    <br>
    <br>

    <label for="q8">8. Como você faz um comentário de múltiplas linhas em PHP?</label>
    <br>
    <input type="radio" name="q8" value="a">a) // Isto é um comentário </input>
    <br>
    <br>
    <input type="radio" name="q8" value="b">b) /* Isto é um comentário */ </input>
    <br>
    <br>
    <input type="radio" name="q8" value="c">c) # Isto é um comentário </input>
    <br>
    <br>
    <br>

    <label for="q9">9. Qual a sintaxe correta para um comando if em PHP?
    <br>
    </label>
    <br>
    <input type="radio" name="q9" value="a">a) if condicao then { ... } </input>
    <br>
    <br>
    <input type="radio" name="q9" value="b">b) if (condição) { ... } </input>
    <br>
    <br>
    <input type="radio" name="q9" value="c">c) if: condicao { ... } </input>
    <br>
    <br>
    <br>

    <label for="q10"> 10. Como você encerra um bloco de código PHP?
    <br>
    </label>
    <br>
    <input type="radio" name="q10" value="a">a) >? </input>
    <br>
    <br>
    <input type="radio" name="q10" value="b">b) ?! </input>
    <br>
    <br>
    <input type="radio" name="q10" value="c">c) ?></input>
    <br>
    <br>
    <br>

    <label for="q11">11. Como você escreve "Olá, mundo!" em PHP? </label>
    <br>
    <input type="radio" name="q11" value="a">a) Ambas as opções.</input>
    <br>
    <br>
    <input type="radio" name="q11" value="b">b) echo "Olá, mundo!"; </input>
    <br>
    <br>
    <input type="radio" name="q11" value="c">c) print("Olá, mundo!"); </input>
    <br>
    <br>
    <br>

    <label for="q12">12. Qual é o operador de igualdade estrita em PHP, que compara tanto o valor quanto o tipo?</label>
    <br>
    <input type="radio" name="q12" value="a">a) ===</input>
    <br>
    <br>
    <input type="radio" name="q12" value="b">b) == </input>
    <br>
    <br>
    <input type="radio" name="q12" value="c">c) = </input>
    <br>
    <br>
    <br>


    <center><button type="submit">Enviar Respostas</button></center>
</form>

</body>
</html>