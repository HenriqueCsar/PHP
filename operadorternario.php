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
        $nome = 'Olá amigo';
        echo ''. $nome .', quantos anos você tem ?: ';

        $bool = $nome == 'Olá amigo';
        ?> 

       <?=$bool ? '</br> - 18' : '</br> - 19'?>

</body>
</html>