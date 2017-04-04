<?php
$html = "";
$url = "http://gdata.youtube.com/feeds/api/users/Srijeeta Ghosh/history";
$xml = simplexml_load_file($url);
for ($i = 0; $i < 10; $i++){
	$title = $xml->feeds->entry[$i]->title;
	$html .= "$title";
	


}
echo $html;

?>