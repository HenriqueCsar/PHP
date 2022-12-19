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
             echo 'Utilizando a tag padrão';
        ?>
        <br>
        <!-- TAG DE IMPRESSÃO -->
        <?= 'Utilizando a tag de impressão'; ?>

        <br>
        <!-- Depois de configurar o short_open_tag no config.ini do PHP é possível utilizar: -->
        <?  echo 'Utilizando a tag curta'; ?>
    </body>
</html>