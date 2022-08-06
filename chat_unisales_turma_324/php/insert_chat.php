<?php
header('Access-Control-Allow-Origin: *');

include_once('config.php');

$query = "INSERT INTO messages(outgoing_id, incomming_id, msg) VALUES (:outgoing_id, :incomming_id, :msg)";
$stmt = $db->prepare($query);
$stmt->bindValue(':outgoing_id', $_POST['outgoing_id']);
$stmt->bindValue(':incomming_id', $_POST['incomming_id']);
$stmt->bindValue(':msg', $_POST['msg']);

$stmt->execute();


?>