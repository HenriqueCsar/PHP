<?php

    session_start();
    $_SESSION['autenticacao'] = 'NAO';
    $_SESSION['id'] = 0;
    $_SESSION['id_acesso'] = 0;

    $autenticacao = false;

    // echo 'Email:' .$_GET['email'];
    // echo '<br>Password:'.$_GET['password'];

    $usuarios_app = array(
        array('id' => 1,'email' => 'user2@teste.com.br','login' => 'User2',  'senha' => '12345', 'id_acesso' => 2),
        array('id' => 2,'email' => 'user@teste.com.br', 'login' => 'User', 'senha' => '12345', 'id_acesso' => 2),
        array('id' => 3,'email' => 'admin@teste.com.br','login' => 'Admin', 'senha' => '12345', 'id_acesso' => 1)
    );

    
    echo 'Email:' .$_POST['email'];
    echo '<br>Password:'.$_POST['senha'];
    foreach($usuarios_app as $user){
        if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
            $autenticacao = true;
            
            $_SESSION['autenticacao'] = 'SIM';
            $_SESSION['id'] = $user['id'];
            $_SESSION['id_acesso'] = $user['id_acesso'];
            $_SESSION['login'] = $user['login'];

            header('Location: home.php');

        };
    };
    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';
?>


<?= $autenticacao ? 'Usuário Autênticado' : header('Location: index.php?login=erro')?>
