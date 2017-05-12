<?php
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'/composer');
}
require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');
$client->setAccessType("offline");        // offline access
$client->setIncludeGrantedScopes(true);   // incremental auth
$client->addScope(GOOGLE_SERVICE_YOUTUBE::YOUTUBE_FORCE_SSL);
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');

?>