<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        
        <?php
            /* 
                Arrays
                
                    SEM ARRAYS
                        $variavel1 = 'maça';
                        $variavel2 = 'banana';
                        $variavel3 = 'uva';
                        $variavel4 = 'pessego';
                        $variavel5 = 'morango';

                    COM ARRAYS
                        $lista_frutas[1] = 'maça';
                        $lista_frutas[2] = 'banana';
                        $lista_frutas[3] = 'uva';
                        $lista_frutas[4] = 'pessego';
                        $lista_frutas[5] = 'morango';      
            */

            //ASSOCIATIVOS
                $lista_frutas = [
                    'a' => 'banana',
                    'b' => 'maça',
                    'c' => 'morango', 
                    'd' => 'uva'
                ];
                echo '<pre>';
                print_r($lista_frutas);
                echo '<hr> <pre>';
                var_dump($lista_frutas);
                echo '<hr>';

                echo $lista_frutas['a'];

                /*echo '<pre>';
                var_dump($lista_frutas);
                echo '<hr>';
                echo '<pre>';
                print_r($lista_frutas);
                */


        ?>
         
    </body>

</html>