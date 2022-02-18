<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            function calcularImposto($salario){
                if($salario <= 1903.98){
                    $imposto = 'Isento';
                    return $imposto;

                } else if($salario >=1903.99 && $salario <= 2826.65){
                    $imposto = $salario * (7.5/100);
                    return $imposto;

                } else if($salario >=2826.66 && $salario <= 3751.05){
                    $imposto = $salario * (15/100);
                    return $imposto;

                }else if($salario >=3751.06 && $salario <= 4664.68){
                    $imposto = $salario * (22.5/100);
                    return $imposto;

                }else if($salario > 4664.68){
                    $imposto = $salario * (27.5/100);
                    return $imposto;
                }
            }

            echo 'O total de imposto a ser pago é R$ ' . calcularImposto(5000);
            
        ?>
    </body>

</html>