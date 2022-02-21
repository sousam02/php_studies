<html>
    <head>
        <title>Loops - for</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            
            /*
                CRIE UM SCRIPT CAPAZ DE PRODUZIR, ATRAVES DE UM LACO DE
                REPETICAO, UM ARRAY COM 6 ELEMENTOS NUMÉRICOS ALEATÓRIOS
                ENTRE 1 E 60, SIMULANDO O FUNCIONAMENTO DO SORTEIO DA MEGA
                SENA. ATENTE-SE AO FATO DE QUE OS NUMEROS ALEATORIOS CONTIDOS
                DETRO DO ARRAY NÃO PODEM SER REPETIDOS.
            */

            $numeros_sorteados = array();

            while(count($numeros_sorteados) <= 5){
                
                $dezena_sorteada = rand(1, 60);
                if(in_array($dezena_sorteada, $numeros_sorteados)  == false){
                    $numeros_sorteados[] = $dezena_sorteada;
                }
                
            }

            echo '<pre>';
                print_r($numeros_sorteados);
            echo '</pre>';

            
        ?>
    </body>

</html>