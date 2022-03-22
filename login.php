<?php
require_once 'vendor/autoload.php';
  
// init configuration
$clientID = '750408780393-lsn833luim1lqd11dtpnuscil3ast00e.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://idk.spoilers.tn.it/Cristo/redirect.php';
   
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
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  <div class="col s12 m6 offset-m3 center-align">
    <a class="oauth-container btn darken-4 white black-text" href="href='".$client->createAuthUrl()" style="text-transform:none">
        <div class="left">
            <img width="20px" style="margin-top:7px; margin-right:8px" alt="Google sign-in" 
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
        </div>
        Login with Google
    </a>
</div>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
}
?>