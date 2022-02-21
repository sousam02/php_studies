<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        
        <?php
            $lista_coisas = [];

            $lista_coisas['frutas'] = array(1 => 'banana', 2=> 'maça', 3=> 'morango', 4=> 'uva');
            $lista_coisas['pessoas'] = array(1 => 'João', 2 => 'José', 3 => 'Maria');
            echo $lista_coisas['frutas'][3];
            
            echo '<hr> <pre>';
            print_r($lista_coisas);
            echo '<pre>';


        ?>
         
    </body>

</html>