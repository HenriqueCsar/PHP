<?php 
session_start();
if(isset($_SESSION['autenticacao']) && $_SESSION['autenticacao'] =='NAO'){
  header('Location: index.php?login=nan');
};
?>