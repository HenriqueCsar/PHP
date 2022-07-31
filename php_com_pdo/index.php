<?php

try{
    $db = new PDO("mysql:server=localhost ; dbname=php_com_dbo", "root", "");

    // $query = '
    
    //     insert into tb_usuarios values ("Henrique","admin@teste.com.br","12345")

    
    // ';
            
    // $retorno = $db->exec($query);
    // echo "$retorno";

}
catch(PDOException $e){
    echo 'Erro:'.$e->getCode().' Mensagem: '.$e->getMessage();

}

?>