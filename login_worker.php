<?php
// Start the session
session_start();

if(isset($_SESSION["logged"])){
  $_SESSION["email"] = htmlentities($_POST["email"]);
  $_SESSION["password"] = htmlentities($_POST["password"]);

  echo("Welcome ". $_SESSION["nome"]);
  echo("<p>clicca qui per tornare alla <a href='./index.php' />home</a></p>'")
}else{
  echo "asd"
}