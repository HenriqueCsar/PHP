<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$db = new PDO('mysql:server=localhost;dbname=php_com_dbo', 'root', '');


/* Dessa forma que está escrito o retorno é possível passar códigos do form pro select 
Ou seja, existe uma falha de SQL Injection aqui
*/
$query = 'select * from tb_usuarios where email = "'.$_POST['email'].'" and senha = "'.$_POST['senha'].'";';

echo $query;

$conexao = $db->query($query);

$lista = $conexao->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($lista);
echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <br>
    <form action='sql_injection.php' method='post'>
    <input type='email' placeholder='Email' name='email'>
    <br>
    <input type='password' placeholder='Nome' name='senha'>
    <br>
    <button type='submit'>Enviar Post</button>
    </form>
</body>
</html>