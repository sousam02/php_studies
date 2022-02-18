<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <?php

            $nome = 'Maria';
            $cor = 'amarelo';
            $idade = 20;
            $atividadePreferida = 'assistir filme';

            echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividadePreferida;
            echo '<br/>';

            echo "Hi $nome, saw that the color you like is $cor, I am seeing too that you are $idade years old and you like $atividadePreferida";
        ?>
    </body>

</html>