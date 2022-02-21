<html>
    <head>
        <title>Loops - While</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            $num = 0;
            echo '--Inicio do loop-- <br>';
            while(true){
                echo "$num <br>";

                $num+= 5;

                if($num > 100){
                    break;
                }
        
            }
            
            echo '--fim do loop--';
            
        ?>
    </body>

</html>