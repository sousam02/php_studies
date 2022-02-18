<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php

            $parametro = 2;

            switch($parametro){
                case 1:
                    echo 'Entrou no case 1';
                    break;
                
                case 2:
                    echo 'entrou no case 2';
                    break;
                
                case 3:
                    echo 'entrou no case 3';
                    break;
                
                default:
                    echo 'nao entrou em nenhum case';
                    break;

            }
        ?>
    </body>

</html>