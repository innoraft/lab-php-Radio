<?php  
//URL of targeted site  
$url = "https://www.googleapis.com/youtube/v3/search?pageToken=CBkQAA&part=snippet&maxResults=25&order=relevance&q=Shapeofyou&topicId=%2Fm%2F02vx4&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY";  
$ch = curl_init();  

// set URL and other appropriate options  
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

// grab URL and pass it to the browser  

$output = curl_exec($ch);  


 // echo $output;

// var_dump(json_decode($output));
// var_dump(json_decode($output, true));

$abc = json_decode($output, true);
// $abc = $abc[0];
// echo "<pre>";
// print_r($abc);
// echo "</pre>";


echo $abc['nextPageToken'];
echo $abc['pageInfo']['totalResults'];
echo $abc['items']['etag'];



// close curl resource, and free up system resources  
curl_close($ch);  
?> 

<?php

for ($i=1; $i<=$abc['pageInfo']['totalResults']; $i++){

// echo "<a href='https://www.googleapis.com/youtube/v3/search?pageToken=$nextPageToken&part=snippet&maxResults=25&order=relevance&q=hello&topicId=%2Fm%2F02vx4&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY'>".'NEXT'."</a> "; 
// };

echo "<a href='https://www.googleapis.com/youtube/v3/search?pageToken=CBkQAA&part=snippet&maxResults=25&order=relevance&q=Shapeofyou&topicId=%2Fm%2F02vx4&key=AIzaSyAtpy776qi2kfcupzrW0535NFLpRF5tVkY'></a>"; 

};

?>