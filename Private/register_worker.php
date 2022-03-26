<?php
    session_start();
  include 'connessione.php';

    
    $_SESSION["classe"] = $_POST["classe"];
    $_SESSION["indirizzo"] = $_POST["indirizzo"];
    $_SESSION["logged"] = true;
        
    header("location: /Public/dashboard.php");
?>