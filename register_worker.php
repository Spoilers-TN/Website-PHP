<?php
    session_start();
    
    $_SESSION["classe"] = $_POST["classe"];
    $_SESSION["indirizzo"] = $_POST["indirizzo"];
    $_SESSION["logged"] = true;
        
    header("location: /dashboard.php");
?>