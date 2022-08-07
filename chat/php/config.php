<?php
    session_start();
    try{
    $db = new PDO('mysql:server=localhost;dbname=chat', 'root', '');
    }catch(PDOException $e){
        echo 'Erro : '.$e->getMessage();
    }
    
?>