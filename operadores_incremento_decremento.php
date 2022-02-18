<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <h3>Pós incremento</h3>
        <?php

            /*
                OPERADORES DE INCREMENTO
                    Pré incremento (++$a) - Acrescenta uma unidade antes de retornar $a
                    Pós incremento ($a++) = retorna $a e acrescenta uma unidade em seguida
                    Pré decremento (--$a) - Subtrai uma unidade antes de retornar $a
                    Pós decremento ($a--) - Retorna $a e em seguida subtrai uma unidade        
            */

            $a = 7;

            echo "O valor contido em a é $a <br>";
            echo 'O valor contido em a é ' . $a++ . '<br>';
            echo "O valor atualizado de a é $a";
            
            echo '<h3>Pré decremento</h3>';
            $b = 10;

            $a = 7;

            echo "O valor contido em b é $b <br>";
            echo 'O valor contido em b é ' . --$b . '<br>';
            echo "O valor atualizado de a é $b";

        ?>
    </body>

</html>