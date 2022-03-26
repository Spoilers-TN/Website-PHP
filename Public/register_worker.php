<?php
    session_start();
  include '../Private/connessione.php';

    
    $_SESSION["classe"] = $_POST["classe"];
    $_SESSION["indirizzo"] = $_POST["indirizzo"];
    $_SESSION["logged"] = true;
        
    header("location: https://beta-dev.spoilers.tn.it/dashboard.php");
?>