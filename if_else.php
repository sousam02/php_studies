<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php
            /*
                IF ELSE (ESTRUTURA)
                    if(condição){
                        ...
                    } else{
                        ...
                    }
                    

                OPERADORES DE COMPARAÇÃO
                    Igual (==)
                    Idêntico(===)
                    Diferente(!=)
                    Não identicos (!==)
                    Menor (<)
                    Maior (>)
                    Menor igual (<=)
                    Maior igual (>=)
                
                OPERADORES LÓGICOS
                    Operador E (AND ou &&) - Ambas as condições têm de ser verdadeiras
                    Operador Ou (OR ou ||) - Pelo menos uma das condições têm de ser verdadeiras
                    Operador Xor (XOR) - Apenas uma das condições têm de ser verdadeiras, mas não as duas
                    Operador Negação (!) - Inverte o resultado da expressão

                    839,99
                    1055,7
                    --------
                    216
                */



            if(3 == 3 && 10 > 3){
                echo 'verdadeiro';
            } else{
                echo 'falso';
            }

        ?>
    </body>

</html>