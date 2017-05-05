
<?php  
//URL of targeted site  
$url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=25&order=relevance&q=ShapeOfYou&topicId=%2Fm%2F02vx4&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch); 
$abc = json_decode($output, true);

// echo $abc;

// echo $output;
?>
<?php
$count=0;
foreach ($abc['items'] as $key => $value1) {

		echo $value1['snippet']['title']; 
		$count++;?> <br> <?php

		// foreach ($value1['snippet'] as $key => $value) {
		// 	echo $value['title'];
		// }
			
	}
	echo $count;	
?>
