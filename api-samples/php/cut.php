<?php
$title = "hello world | hello | HELLO";
echo $title;
echo "<br>";

// $cut = strpos($title, "|");
$arr = explode("|", $title, 2);
$first = $arr[0];
echo $first;
?>