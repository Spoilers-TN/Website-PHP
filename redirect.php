<?php

session_start();

require_once 'vendor/autoload.php';
$clientID = '750408780393-lsn833luim1lqd11dtpnuscil3ast00e.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://beta-dev.spoilers.tn.it/redirect.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
 $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
 $client->setAccessToken($token['access_token']);
  
 // get profile info
 $google_oauth = new Google_Service_Oauth2($client);
 $google_account_info = $google_oauth->userinfo->get();
 $_SESSION["email"] =  $google_account_info->email;
 $_SESSION["nome"] =  $google_account_info->name;
   $_SESSION["cognome"] =  $google_account_info->;

  header("location: /register.php");
  
 // now you can use this profile info to create account in your website and make user logged in.
} else {
  header("location: ".$client->createAuthUrl());
}
?>
