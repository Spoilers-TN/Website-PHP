<?php
  $currentCookieParams = session_get_cookie_params();
  print_r($currentCookieParams);
  session_start();
  session_destroy();
  
  header("location: /index.php?logout=ok");

?>