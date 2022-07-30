<?php
     session_start();
     $_SESSION['autenticacao'] = 'NAO';
    header('Location: index.php?login=logoff');
?>