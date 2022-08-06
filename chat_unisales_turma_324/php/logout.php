<?php
include_once('config.php');

$query = "update users set status = 'Off' where unique_id = :unique_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':unique_id', $_SESSION['unique_id']);
$stmt->execute();


/*****DESTRUIR SEÇÃO******/

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

header('Location: ../login.php');


?>