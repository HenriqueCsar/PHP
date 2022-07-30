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
        $num = 7.5;
        //Arredonda para cima;
       echo ceil($num).'</br>'; 
        //Arredonda o valor para baixo.
       echo floor($num).'</br>';
        //Arredonda o valor baseado nas casas decimais.
       echo round($num).'</br>';
        //número aleatório
       echo rand();
        //raiz quadrada.
       echo sqrt($num).'</br>';
    ?>
</body>
</html>