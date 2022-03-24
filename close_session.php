<?php

session_start();

// Remove token and user data from the session
unset($_SESSION['access_token']);

// Reset OAuth access token
$gClient->revokeToken();

// Destroy entire session data
session_destroy();
  
header("location: /index.php?logout=ok");

?>