<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php
            /*
                Tipos de variáveis
                
                    String - palavras
                    int - numeros inteiros
                    float - numeros decimais
                    boolean - true or false
                    array - mapa ordenado de variáveis
            
                Regras para declaração de variáveis em php
                    devem obrigatóriamente começar com o caracter $
                    não podem conter espaços ou caracteres especiais, exceto underline
                    não é necessaria a declaração de tipo de variavel

                Case sensitive
                    faz a distinção de caracteres minúsculos e maiúsculos
                    $nome != $Nome != $NOME

                Exemplos de variáveis inválidas
                    $ idade
                    $1fone
                    $número
            */

            //string
            $nome = 'Jorge Sant Ana';
            //int
            $idade = 29; 
            //float
            $peso = 82.5;
            //boolean
            $fumante = true





        ?>
        <h1>Ficha Cadastral</h1>
        <br>
        <p>Nome: <?=$nome?></p>
        <p>Idade: <?=$idade?></p>
        <p>Peso: <?=$peso?></p>
        <p>Fumante: <?=$fumante?></p>
    </body>

</html>