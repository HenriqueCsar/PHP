<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5</title>
</head>
<body>
    <?php

        function calcularMedia($valor1, $valor2){
            return $valor1+$valor2/2;
        }

        echo 'Calculo de média: ' . calcularMedia(60,6) . '.'
    ?>

    
</body>
</html>