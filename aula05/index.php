<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>
<body>
    <h1>Projeto Controle remoto</h1>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c -> ligar();
            $c -> abrirMenu();
            $c -> maisVolume();
            $c -> setVolume(100);
            $c -> abrirMenu();
            $c -> desligar();
            $c -> abrirMenu();
            $c -> ligar();
            $c -> abrirMenu();
        ?>
    </pre>
</body>
</html>