<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $titulo = 'Ficha do Cliente';

        $nome = 'Henrique César';

        $idade = 15;

        $peso = 70.5;

        $bebe = false;
        //Constante variavel
        define("nome2", "Olá amigos");
    ?>
    <h1> <?= nome2 ?> </h1>
    <h1> <?= $titulo ?> </h1>
    <p> Cliente: <?= $nome ?> </p>
    <p> Idade: <?= $idade ?> </p>
    <p> Peso: <?= $peso ?> </p>
    <p> Bebe: <?= $bebe ?> </p>

</body>
</html>