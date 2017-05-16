<?php

$time = date("h:i:sa");
echo $time;
echo "<br>";
$stamp =  date("G:i", strtotime($time));
echo $stamp;
?>