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
       echo date('d/m/y h:i');

       $datainicial = date_create('2022-07-29');
       $datafinal = date_create('2022-07-31');

       $interval = date_diff($datainicial, $datafinal);

       echo '</br>'.$interval->format('%R%a days') . "\n";
    ?>
</body>
</html>