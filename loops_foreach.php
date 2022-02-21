<html>
    <head>
        <title>Loops - for</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            
            $itens = array('sofá', 'mesa', 'cadeira', 'fogao', 'geladeira');

            echo '<pre>';
                print_r($itens);
            echo '</pre>';

            foreach($itens as $item){
                echo $item;

                if($item == 'mesa'){
                    echo ' (*compre uma mesa e ganhe 25% de desconto na proxima cadeira)';
                }

                echo '<br>';
            }
            
        ?>
    </body>

</html>