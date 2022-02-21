<html>
    <head>
        <title>Loops - for</title>
        <meta charset = "utf-8">
    </head>

    <body>

        <?php
            
            $funcionarios = array(
                array('nome' => 'João', 'salario' => 2500, 'Data de Nascimento' => '18/04/2002'),
                array('nome' => 'Maria', 'salario' => 3000),
                array('nome' => 'Julia', 'salario' => 2800)
            );
            echo '<pre>';
                print_r($funcionarios);
            echo '</pre> <hr>';

            foreach($funcionarios as $indice => $nome_funcionario){
                foreach($nome_funcionario as $indice2 => $valor){
                    echo "$indice2 - $valor <br>";
                }
                echo '<hr>';

            }

            
        ?>
    </body>

</html>