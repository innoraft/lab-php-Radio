<?php 
session_start();
$_SESSION['play'] = $_GET['id'];
echo $_SESSION['play'];
?>