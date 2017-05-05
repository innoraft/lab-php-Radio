<?php
session_start();
unset($_SESSION["userID"]);
session_destroy();
header('Location: http://radio1.com/api-samples/php/home.html')
?>