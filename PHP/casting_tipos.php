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
        //gettype() - retorna o tipo da variável 
       $valor = 20;

        echo gettype((float)$valor);
        echo '</br>';
        echo gettype((string)$valor);


    ?>
</body>
</html>