<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        
        <?php
            $lista_frutas = ['banana','maça', 'morango', 'uva'];
            
            /*echo '<pre>';
            print_r($lista_frutas);
            echo '</pre>';

            //PESQUISA SE UM ITEM ESTÁ CONTIDO NO ARRAY (in_array())
                $verificaArray = in_array('banana', $lista_frutas);

                if($verificaArray){
                    echo 'O elemento existe no array';
                } else{
                    echo 'O elemento não existe no array';
                }
                echo '<hr>';

            //array_search pesquisa o item passado como parametro e retorna o indice onde ele está

            $verificaArray2 = array_search('uva', $lista_frutas);
            
            if($verificaArray2 != NULL){
                echo 'O valor ' . $lista_frutas[$verificaArray2] . ' existe no array';
            } else{
                echo 'o valor não existe no array';
            }*/

            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['Joao', 'Maria', 'José']
            ];

            echo '<pre>';
            print_r($lista_coisas);

            echo '</pre>';

            echo in_array('banana', $lista_coisas['frutas']);

                
                


            
        ?>
         
    </body>

</html>