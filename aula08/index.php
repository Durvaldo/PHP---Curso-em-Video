<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-classe e Sub-classe</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        require_once 'Professor.php';
        // $p1 = new Pessoa();
        // $v1 = new Visitante();
        // $v1 -> setNome("Durvaldo");         
        // $v1 -> setIdade(25); 
        // $v1 -> setSexo("M");         
        // print_r($v1);
        $a1 = new Aluno();
        $a1 -> setNome("Durvaldo");
        $a1 -> setMatricula(1111);
        $a1 -> setIdade(25);
        $a1 -> setSexo("M");
        $a1 -> setCurso("POO");
        $a1 -> pagarMensalidade();
        print_r($a1);
        $b1 = new Bolsista();
        $b1 -> setNome("Durvaldo");
        $b1 -> setMatricula(2222);
        $b1 -> setBolsa(12.5);
        $b1 -> setCurso("Html e Css");
        $b1 -> setIdade(26);
        $b1 -> pagarMensalidade();
        print_r($b1);


        ?>
    </pre>
</body>
</html>