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
        $texto = 'curso completo de PHP';

        //String to lower
        echo $texto;
        echo '<br><hr> strtolower - '.strtolower($texto);

        //String to Upper
        echo '</br> strtoupper - '.strtoupper($texto).'</br>';

        //Capitalize
        echo 'ucfirst - '.ucfirst($texto).'</br>';

        //contagem de caracteres de uma string
        echo 'strlen - '.strlen($texto).'</br>';

        //string replace
        echo 'str_replace - '.str_replace('PHP', 'Javascript', $texto);

        //string função substring
        echo '</br>substr - '.substr($texto, 6,15);
    
    ?>
</body>
</html>