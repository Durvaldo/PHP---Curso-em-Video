<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-02</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $p1 = new Pessoa("Durvaldo", 25, "Masculino");
        $p1 -> fazeraniversario();
        print_r($p1);
        $leitura = new Livro("Curse of Strahd", "D&D", 250, $p1);
        $leitura -> abrir();
        $leitura -> avancarPag();
        print_r($leitura);
        $leitura -> folear(152);
        $leitura -> detalhes();
        ?>
    </pre>    
</body>
</html> 