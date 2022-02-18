<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php
            //Declarando e atribuindo valor as variaveis constantes
            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');
            //Modo de uso das variáveis
            echo BD_URL . '<br/>';
            echo BD_USUARIO . '<br/>';
            echo BD_SENHA . '<br/>';
        ?>
    </body>

</html>