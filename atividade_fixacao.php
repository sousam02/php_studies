<html>
    <head>
        <title>Curso PHP</title>
        <meta charset = "utf-8">
    </head>

    <body>
        <h1>Doação de sangue</h1>
        <p> Conclusão: 
            <?php
                $idade = 20;
                $peso = 45;                    

                if($idade >= 16 && $idade <= 69 && $peso >= 50){
                    echo 'Atende aos requisitos';
                } else{
                    echo 'Não atende aos requisitos';
                }
            ?>
        </p> 
    </body>

</html>