<?php

  if(isset($_POST['id'])){

  	echo "working";

	// echo $_POST['id'];

	$test = $_POST['value'];
	echo $test;


	echo "<script>var name_element = document.getElementById('$test');</script>";

     }

     ?>		