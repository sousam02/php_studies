<html>
    <head>
        <title>Loops - for</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            
            $registros = array(
                array('titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo noticia 1'),
                array('titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo noticia 2'),
                array('titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo noticia 3'),
                array('titulo' => 'Titulo noticia 4', 'conteudo' => 'conteudo noticia 4')
            );


            echo '<pre>';
                print_r($registros);
            echo '</pre>';
            

            
            
            /*while($indice < count($registros)){

                echo '<h3>' . ($registros[$indice]['titulo']) . '</h3>';
                echo '<p>' . ($registros[$indice]['conteudo']) . '</p>';


                echo '<hr>';


                $indice++;

            }*/

            /*
            do{
                
                echo '<h3>' . $registros[$indice]['titulo'] . '</h3>';
                echo '<p>' . $registros[$indice]['conteudo'] . '</p>';

                $indice++;

            }while($indice < count($registros));
        
            */

            for($indice = 0; $indice < count($registros); $indice++){
                echo '<h3>' . $registros[$indice]['titulo'] . '</h3>';
                echo '<p>' . $registros[$indice]['conteudo'] . '</p>';

            }
        ?>
    </body>

</html>