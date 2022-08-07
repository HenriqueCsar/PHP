<?php
    session_start();
    try{
    $db = new PDO('mysql:host=sql106.epizy.com;dbname=epiz_32327915_chat', 'epiz_32327915', 'QA3GNxZq4w7'); 
    }catch(PDOException $e){echo'Erro '.$e->getMessage();}
?>