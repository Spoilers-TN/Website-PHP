<?php
  // Start the session
  session_start();
  include './Private/connessione.php';

  
  if(isset($_SESSION["logged"])){
    header("location: /Public/dashboard.php?");
  }else{
    echo("Non sei registrato clicca <a href='./Private/register.php' />qui</a> per registrarti");
  }