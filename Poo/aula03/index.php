<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02 - poo</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            // instanciar
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            $c1->tampar();
        ?>
        <pre>
            <?php
            var_dump($c1);
            ?>
        </pre>
    </body>
</html>