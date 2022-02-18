<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <h1>Detalhes do pedido</h1>
        <?php
            $usuario_possui_cartao = true;
            $valor_compra = 250;

            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if($usuario_possui_cartao && $valor_compra >=400){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            } else if($usuario_possui_cartao && $valor_compra >=300){
                $valor_frete = 10;
                $recebeu_desconto_frete = true;
            } else if($usuario_possui_cartao && $valor_compra >=100){
                $valor_frete = 25;
                $recebeu_desconto_frete = true;
            }
        ?>

        <p>Possui cartão da loja? <?=$usuario_possui_cartao ? 'SIM' : 'NÂO'?>
            <?php
                /*$usuario_possui_cartao ? 'SIM' : 'NÂO';
                */
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete?
            <?php
                $desconto = $recebeu_desconto_frete ? 'sim' : 'não';

                echo $desconto;
            ?>
        </p>

        <p>Valor do frete: <?= $valor_frete ?></p>;

    </body>

</html>