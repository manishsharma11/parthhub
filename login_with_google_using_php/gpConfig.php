<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '560644627197-2uuo5bme13al3lih3qs0que1gb54emir.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Pr2JLC4bNf8FMmoalMqfWRTt'; //Google client secret
$redirectURL = 'http://localhost/login_with_google_using_php/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>