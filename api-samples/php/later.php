<?php

  require_once 'vendor/autoload.php';
  require_once 'vendor/guzzlehttp/guzzle/src/Client.php';
  require_once __DIR__.'/vendor/google/apiclient-services/src/Google/Service/YouTube.php';

$OAUTH2_CLIENT_ID = '195495926744-ud8oh3gpij37tejdttq2e6trda7aqrsa.apps.googleusercontent.com';
$OAUTH2_CLIENT_SECRET = 'J1Q3Fn5nKeF0Jn9oEYajztpr';


  $client = new Google_Client();
  $client->setClientId($OAUTH2_CLIENT_ID);
$client->setClientSecret($OAUTH2_CLIENT_SECRET);

  $youtube = new Google_Service_YouTube($client);

  $nextPageToken = '';
  $htmlBody = '<ul>';

  do {
    $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
    'playlistId' => 'PLa7tLMoN7vnz5Ll0FmVwyVenMn0nx-L4u',
    'maxResults' => 50,
    'pageToken' => $nextPageToken));

    foreach ($playlistItemsResponse['items'] as $playlistItem) {
      $htmlBody .= sprintf('<li>%s (%s)</li>', $playlistItem['snippet']['title'], $playlistItem['snippet']['resourceId']['videoId']);
    }

    $nextPageToken = $playlistItemsResponse['nextPageToken'];
  } while ($nextPageToken <> '');

   $htmlBody .= '</ul>';

?>

<!doctype html>
<html>
  <head>
    <title>Video list</title>
  </head>
  <body>
    <?= $htmlBody ?>
  </body>
  </html>