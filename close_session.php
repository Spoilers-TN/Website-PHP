<?php

// Remove token and user data from the session
unset($_SESSION['token']);
unset($_SESSION['userData']);

// Reset OAuth access token
$gClient->revokeToken();

// Destroy entire session data
session_destroy();
  
header("location: /index.php?logout=ok");

?>