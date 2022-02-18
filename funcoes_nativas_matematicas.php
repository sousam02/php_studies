<html>
    <head>
        <title>Funções nativas matematicas</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            /*
                FUNÇÕES NATIVAS PARA CALCULOS MATEMATICOS
                    ceil ($numero) -> Arredonda o valor para cima
                    floor ($numero) -> Arredonda o valor para baixo
                    round ($numero) -> Arredonda o valor com base nas casas decimais
                    rand () Gera um inteiro aleatório, um random
                    sqrt($numero) -> Retorna a raiz quadrada
                    
                */
                echo $num = 9;
                echo $num = 9 . '<br>';

                echo 'Arredondamento para cima:' . ceil($num) . '<br>';
                echo 'Arredondamento para baixo:' . floor($num) . '<br>';
                echo 'Arredondamento de acordo com a casa decimal:' .  round ($num) . '<br>';
                echo 'numero aleatorio:' .  rand(10,20) . '<br>';
                echo sqrt($num);


            
        ?>
    </body>

</html>