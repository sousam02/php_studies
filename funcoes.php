<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            function exibirBoasVindas(){
                echo 'Bem vindo ao curso de PHP! <br>';
            }

            function calcularAreaTerreno($largura, $comprimento){
                $area = $largura * $comprimento;

                return $area;
            }

            exibirBoasVindas();

            echo 'A Área calculada é ' . calcularAreaTerreno(5,5);
        
            
        ?>
    </body>

</html>