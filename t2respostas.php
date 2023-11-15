<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
    <h2> Gabarito</h2>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
        button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <form action="area-usuario.php" method="POST">
 <?php
  // Receber as respostas do formulário
 $respostas = array(
    'q1' => $_POST['q1'],
    'q2' => $_POST['q2'],
    'q3' => $_POST['q3'],
    'q4' => $_POST['q4'],
    'q5' => $_POST['q5'],
    'q6' => $_POST['q6'],
    'q7' => $_POST['q7'],
    'q8' => $_POST['q8'],
    'q9' => $_POST['q9'],
    'q10' => $_POST['q10'],
    'q11'=> $_POST['q11'],
    'q12'=> $_POST['q12'],
 );

 // Definir respostas corretas
 $respostas_corretas = array(
    'q1' => 'c',
    'q2' => 'b',
    'q3' => 'c',
    'q4' => 'b',
    'q5' => 'a',
    'q6' => 'c',
    'q7' => 'a',
    'q8' => 'b',
    'q9' => 'b',
    'q10' => 'c',
    'q11'=> 'a',
    'q12'=> 'a',
 );

 $pontuacao = 0;

 // Verificar as respostas e exibir os resultados
 foreach ($respostas_corretas as $pergunta => $resposta_correta) {
    echo "<p><strong>Pergunta $pergunta:</strong></p>";

    if (isset($respostas[$pergunta])) {
        if ($respostas[$pergunta] === $resposta_correta) {
            echo "<p>Sua resposta: <span class='correct'>$respostas[$pergunta]</span></p>";
            echo "<p>Correto! Resposta: <span class='correct'>$resposta_correta</span></p>";
            // Incrementar a pontuação
            $pontuacao +=1.0;
        } else {
            echo "<p>Sua resposta: <span class='incorrect'>$respostas[$pergunta]</span></p>";
            echo "<p>Incorreto! Resposta correta: <span class='correct'>$resposta_correta</span></p>";
        }
    } else {
        echo "<p>Sua resposta: <span class='incorrect'>Não selecionada</span></p>";
        echo "<p>Incorreto! Resposta correta: <span class='correct'>$resposta_correta</span></p>";
    }

    echo "<hr>";
 }

 // Exibir pontuação geral
 echo "<p><strong>Pontuação Geral:</strong> $pontuacao/12</p>";
 ?>
        <center><button type="submit">Sair</button></center>
</form>
</body>
</html>