<html>
    <head>
        <title>Funções nativas matematicas</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            //FUNÇÕES NATIVAS PARA MANIPULAR ARRAYS
                //Função para saber se a variável é um array
                    $array = array('notebook', 'teclado');
                    $retorno = is_array($array);

                    if($retorno){
                        echo 'É um array <hr>';
                    } else{
                        echo 'Não é um array';
                    }
                //Função que retorna todas as chaves (indices) de um array
                    $array = [1 => 'a', 7 => 'b', 10 => 'c'];

                    echo '<pre>';
                        print_r($array);
                    echo '</pre>';

                    $array_keys = array_keys($array);

                    echo '<pre>';
                        print_r($array_keys);
                    echo '</pre> <hr>';

                //Função que ordena um array e reajusta seus indices
                    $array2 = ['notebook', 'mouse', 'cabo', 'gabinete', 'fonte atx'];
                    echo '<pre>';
                        print_r($array2);
                    echo '</pre>';

                    sort($array2);

                    echo '<pre>';
                        print_r($array2);
                    echo '</pre> <hr>';

                //Função que ordena um array, mas mantém seus índices
                    $array3 = ['notebook', 'mouse', 'cabo', 'gabinete', 'fonte atx'];
                    echo '<pre>';
                        print_r($array3);
                    echo '</pre>';

                    asort($array3);

                    echo '<pre>';
                        print_r($array3);
                    echo '</pre> <hr>';

                //Função que conta a quantidade de elementos dentro da array passada como parâmetro
                    $array4 = ['notebook', 'mouse', 'cabo', 'gabinete', 'fonte atx'];
                    echo '<pre>';
                        print_r($array4);
                        echo count($array4);
                    echo '</pre> <hr>';
                
                //Função que funde vários arrays em um array
                    $array5 = ['osx', 'windows'];
                    $array6 = array('linux');
                    $array7 = ['solarys'];

                    $novo_array = array_merge($array5, $array6, $array7);

                    echo '<pre>';
                        print_r($novo_array);
                    echo '</pre> <hr>';

                 //Função que divide uma string baseada em um delimitador
                    $string = '26/04/2018';

                    $array_de_retorno = explode('/', $string);

                    echo $string;
                    echo '<pre>';
                        print_r($array_de_retorno);

                        echo $array_de_retorno[2] . '/' . $array_de_retorno[1] . '/' . $array_de_retorno[0];
                    echo '</pre> <hr>';

                //Função que junta uma array em uma string passando como parâmetro um delimitador
                    $array_implode = ['a', 'd', 'f', 'r', 'g'];

                    echo $string_retorno = implode(', ', $array_implode);




                    



            
        ?>
    </body>

</html>