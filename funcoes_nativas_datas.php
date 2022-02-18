<html>
    <head>
        <title>Funções nativas datas</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            /*
                FUNÇÕES NATIVAS PARA DATAS
                    
                
                //RECUPERAÇÃO DA DATA ATUAL
                    echo date('d-m-Y H:i') . '<br>';
                    echo date_default_timezone_get() . '<br>';
                    echo date('d-m-Y H:i') . '<br>';
            */

            $data_inicial = '2018-04-24';
            $data_final = '2018-05-15';

            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            echo $data_inicial . ' - ' . $time_inicial . '<br>';
            echo $data_final . ' - ' . $time_final . '<br>';

            $diferença_entre_datas = $time_final - $time_inicial;

            echo 'A diferença de segundos entre a data inicial e final é ' . $diferença_entre_datas / (60 * 60 * 24);
            
            

        ?>
    </body>

</html>