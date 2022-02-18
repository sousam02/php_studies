<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php

            /*
                OPERADORES ARITMETICOS
                    Adição (+) - Soma Valores
                    Subtração (-) - Diferença entre valores
                    Multiplicação (*) - Produto de valores
                    Divisão (/) - Quociente dos valores
                    Módulo (%) - Resto existente em uma operação de divisão



            */ 
            $num1 = 8;
            $num2 = 4;

            echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
            echo '<br>';

            echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
            echo  '<br>';

            echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
            echo  '<br>';

            echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
            echo  '<br>';

            echo "O resto da divisão entre $num1 e $num2 é " . ($num1 % $num2);
            echo  '<br> <hr>';

            //  OPERADORES DE ATRIBUIÇÃO E ARITMETICOS

            $x = 10;
            $x += 5;

            echo $x


        ?>
    </body>

</html>