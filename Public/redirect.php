<?php
  session_start();
  include '../Private/connessione.php';

  
  require_once 'vendor/autoload.php';
  $clientID = '750408780393-lsn833luim1lqd11dtpnuscil3ast00e.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'https://beta-dev.spoilers.tn.it/Public/redirect.php';
  
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
    $_SESSION["nome"] =  $google_account_info->given_name;
    $_SESSION["cognome"] =  $google_account_info->family_name;


    header("location: /Private/register.php");
    
   // now you can use this profile info to create account in your website and make user logged in.
  } else {
    if(!isset($_SESSION["logged"])){
      header("location: ".$client->createAuthUrl());
    }else{
      echo "<p>Sei già loggato!</p>";
      echo "<p>Per tornare all'Home <a href=\"./index.php\" />clicca qui.</a></p>";
    }
  }

?>