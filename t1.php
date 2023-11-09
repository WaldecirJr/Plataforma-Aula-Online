<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://mercadoeconsumo.com.br/wp-content/uploads/2020/04/duvidas-interrogacao-1024x576.jpg'); /* Substitua 'background.jpg' pelo caminho correto da sua imagem de fundo. */
            background-size: cover; /* Redimensiona a imagem para cobrir todo o elemento. */
            background-repeat: no-repeat; /* Evita repetições da imagem. */
            background-attachment: fixed; /* Mantém a imagem fixa enquanto a página rola. */
            background-position: center center; /* Posiciona a imagem no centro da tela. */
        }

        #chat {
            background-color: #fff;
            border: 1px solid #ccc;
            width: 400px;
            margin: 0 auto;
            padding: 10px;
            max-height: 300px;
            overflow-y: auto;
        }

        #chat p {
            margin: 0;
        }

        #nome {
            width: 200px;
            padding: 5px;
        }
        
        #mensagem {
            width: 300px;
            height: 300px;
            padding: 5px;
        }

        #submit {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #submit:hover {
            background-color: #0056b3;
        }
    </style>
    <script type="text/javascript">
        function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function () {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                    document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight;
                }
            }
            req.open('GET', 'server.php', true);
            req.send();
        }

        function preencherNome() {
            var nome = document.getElementById('nome');
            
            // Verifica se o campo de nome está vazio e preenche com "ALUNO" se estiver
            if (nome.value.trim() === '') {
                nome.value = 'Professor:';
            }
        }

        setInterval(function(){ajax();}, 1000);
    </script>
</head>
<body>
    <div id='chat'></div>
    <form method="POST" action="t1.php">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" onfocus="preencherNome()" onkeyup="preencherNome()"><br>
        <br>
        <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem"></textarea><br>
        <br>
        <button id="submit">Enviar</button>
    </form>

    <?php
    include("bd_conect.php");
    $nome = $_POST["nome"];
    $mensagem = $_POST["mensagem"];
    $pdo->query("INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem'");
    ?>
</body>
</html>
