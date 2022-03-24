<?php
  
  session_start();
  $gClient->revokeToken();
  session_destroy();
  
  header("location: /index.php?logout=ok");

?>