<?php 

session_start();

$arquivo = fopen('banco_de_dados.txt', 'a');


$titulo = str_replace('#','-',$_POST['titulo']);
$relacao = str_replace('#','-',$_POST['relacao']);
$descricao = str_replace('#','-',$_POST['descricao']);
$id_acesso = str_replace('#','-',$_SESSION['id_acesso']);

$texto = $id_acesso . '#' . $titulo . '#' . $relacao . '#' . $descricao . PHP_EOL;

echo $texto;

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: home.php?post=sucess')


?>