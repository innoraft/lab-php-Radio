<?php
session_start();
$server = $_SERVER['SERVER_NAME'];
// echo $server;
unset($_SESSION["userID"]);
session_destroy();
header('Location: http://'.$server.'/index.html');
?>