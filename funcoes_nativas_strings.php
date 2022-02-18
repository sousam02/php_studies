<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            /*
                FUNÇÕES NATIVAS PARA MANIPULAR STRINGS
                    strtolower($texto) -> Transforma todos os caracteres da string em minusculos
                    
                    strtoupper($texto) -> Transforma todos os caracreres da string em maiusculo
                    
                    ucfirst ($texto) -> Transforma o primeiro caracter da string em maiusculo
                    
                    strlen ($texto) -> Conta a quantidade de caracteres de uma string
                    
                    str_replace (procura por, substitui por, $texto) -> substitui uma cadeia de caracteres por outra dentro de uma string
                    
                    substr ($texto, posição_inicial, qtde_caracteres) -> captura e retorna parte da string

                */

                $texto = 'curso completo de PHP';
                echo $texto . '<br><br>';
                echo strtolower($texto) . '<br><br>';
                echo strtoupper($texto) . '<br><br>';
                echo ucfirst($texto) . '<br><br>';
                echo strlen($texto) . '<br><br>';
                echo str_replace('PHP', 'JavaScript', $texto) . '<br><br>';;
                echo substr($texto, 1, 4);


            
        ?>
    </body>

</html>