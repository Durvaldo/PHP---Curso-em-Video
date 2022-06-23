<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banco Bancoso</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';
                $p1 = new ContaBanco(); //Jubileu
                $p2 = new ContaBanco(); //Creusa
                $p1 -> abrirConta("CC");
                $p1 -> setDono("Jubileu");
                $p1 -> setNumConta(1111);
                $p2 -> abrirConta("CP");
                $p2 -> setDono("Creuza");
                $p2 -> setNumConta(2222);

                $p1 -> depositar(300);
                $p2 -> depositar(500);

                $p2 -> sacar(100);

                print_r ($p1);
                print_r ($p2);


            ?>
        </pre>
    </body>
</html>