<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '336106167732-ngj3n5c3rcl9j61bb8jei19lve1mk1pl.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'OSngiRoC6Ws1Nra_ZW8S05N5'; //Google client secret
$redirectURL = 'http://localhost/googlelogin/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>