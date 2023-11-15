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

    <label for="q2">2. Qual é a linguagem de estilo padrão na web?</label>
    <br>
    <input type="radio" name="q2" value="a">a) JavaScript</input>
    <br>
    <br>
    <input type="radio" name="q2" value="b">b) CSS</input>
    <br>
    <br>
    <input type="radio" name="q2" value="c">c) SQL</input>
    <br>
    <br>
    <br>

    <label for="q3">3. O que significa CSS?</label>
    <br>
    <input type="radio" name="q3" value="a">a) Computer Style Sheets</input>
    <br>
    <br>
    <input type="radio" name="q3" value="b">b) Creative Style Sheets</input>
    <br>
    <br>
    <input type="radio" name="q3" value="c">c) Cascading Style Sheets</input>
    <br>
    <br>
    <br>

    <label for="q4">4. Quanto ao ambiente de desenvolvimento de aplicações para a Internet, julgue o item. 
    <br>
     As folhas de estilos XSLT permitem transformar documentos XML para documentos HTML. </label>
    <br>
    <input type="radio" name="q4" value="a">a) Errado</input>
    <br>
    <br>
    <input type="radio" name="q4" value="b">b) Certo</input>
    <br>
    <br>
    <br>

    <label for="q5">5. Qual propriedade CSS é usada para alterar a cor de fundo de um elemento HTML?</label>
    <br>
    <input type="radio" name="q5" value="a">a) Background-color </input>
    <br>
    <br>
    <input type="radio" name="q5" value="b">b) Front-Size </input>
    <br>
    <br>
    <input type="radio" name="q5" value="c">c) Color </input>
    <br>
    <br>

    <label for="q6">6. No contexto do HTML DOM, assinale a propriedade (property) que pode ser utilizada na programação para 
    <br>
    recuperar (get) ou alterar (change) qualquer elemento.</label>
    <br>
    <input type="radio" name="q6" value="a">a) getElementById </input>
    <br>
    <br>
    <input type="radio" name="q6" value="b">b) display </input>
    <br>
    <br>
    <input type="radio" name="q6" value="c">c) innerHTML </input>
    <br>
    <br>
    <br>

    <label for="q7">7. Uma especificação W3C, independentemente de plataforma e linguagem, onde se pode alterar e editar a estrutura de um documento, 
    <br>
    criando páginas Web altamente dinâmicas, é denominada</label>
    <br>
    <input type="radio" name="q7" value="a">a) DOM </input>
    <br>
    <br>
    <input type="radio" name="q7" value="b">b) CGI </input>
    <br>
    <br>
    <input type="radio" name="q7" value="c">c) DTD </input>
    <br>
    <br>
    <br>

    <label for="q8">8. Os elementos e suas combinações possíveis, dentro de um documento XML, são definidos formalmente por</label>
    <br>
    <input type="radio" name="q8" value="a">a) um documento HTML </input>
    <br>
    <br>
    <input type="radio" name="q8" value="b">b) um Schema </input>
    <br>
    <br>
    <input type="radio" name="q8" value="c">c) uma GML </input>
    <br>
    <br>
    <br>

    <label for="q9">9. Um documento WSDL (verão 1.1) é um arquivo com sintaxe XML, sendo que os serviços podem ser compostos por diversos elementos
    <br>
    O elemento que representa a definição abstrata dos dados que estão sendo transmitidos se chama
    </label>
    <br>
    <input type="radio" name="q9" value="a">a) data </input>
    <br>
    <br>
    <input type="radio" name="q9" value="b">b) message </input>
    <br>
    <br>
    <input type="radio" name="q9" value="c">c) steam </input>
    <br>
    <br>
    <br>

    <label for="q10">10. O objeto XMLHttpRequest é essencial para o AJAX, sendo suportado por todos os navegadores modernos. 
    <br>
    Os métodos válidos desse objeto são</label>
    <br>
    <input type="radio" name="q10" value="a">a) abort() e receive()</input>
    <br>
    <br>
    <input type="radio" name="q10" value="b">b) open() e responseXML()</input>
    <br>
    <br>
    <input type="radio" name="q10" value="c">c) getAllResponseHeaders() e setRequestHeader() </input>
    <br>
    <br>
    <br>

    <label for="q11">11. A tag que deve ser utilizada no da estrutura HTML e que serve para 
    <br>
    definir algumas informações do site, como "author", "description" e "keywords", se chama:</label>
    <br>
    <input type="radio" name="q11" value="a">a) < content > </input>
    <br>
    <br>
    <input type="radio" name="q11" value="b">b) < meta > </input>
    <br>
    <br>
    <input type="radio" name="q11" value="c">c) < script > </input>
    <br>
    <br>
    <br>

    <label for="q12">12. Assinale a alternativa que melhor descreve alguma diferença entre as tags < div > e < span > no HTML.</label>
    <br>
    <input type="radio" name="q12" value="a">a) < div > é um elemento de bloco enquanto < span > é um elemento inline.</input>
    <br>
    <br>
    <input type="radio" name="q12" value="b">b)  < div > não aceita aninhamento enquanto < span > aceita. </input>
    <br>
    <br>
    <input type="radio" name="q12" value="c">c) Não existe diferença, exceto pelo nome. </input>
    <br>
    <br>
    <br>


    <center><button type="submit">Enviar Respostas</button></center>
</form>

</body>
</html>
