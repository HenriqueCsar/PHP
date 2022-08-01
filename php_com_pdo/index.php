<?php

try{
    $db = new PDO("mysql:server=localhost ; dbname=php_com_dbo", "root", "");


    //TRABALHANDO APENAS COM VÁRIOS RESULTADOS COM FETCHALL 
     $query = '
        select * from tb_usuarios;
    
     ';
            
     $retorno = $db->query($query);
     $lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
    //     echo '<pre>';
    //  print_r($lista);
    //  echo '</pre>';

    foreach($lista as $listas){
        echo 'Email:' . $listas['email'] . '<br>';
    }

    //TRABALHANDO APENAS COM UM RESULTADO COM FETCH 
    $query2 = '
        select * from tb_usuarios where nome = "Henrique";
    ';

    $conexao  = $db->query($query2);

    $lista2 = $conexao->fetch(PDO::FETCH_NUM);
         echo '<br><pre>';
      print_r($lista2);
      echo '</pre>';


}
catch(PDOException $e){
    echo 'Erro:'.$e->getCode().' Mensagem: '.$e->getMessage();

}

?>