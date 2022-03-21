<?php
// Start the session
session_start();

if(isset($_SESSION["logged"])){
  echo("Welcome ". $_SESSION["nome"]);
  echo("<p>clicca qui per tornare alla <a href='./index.php' />home</a></p>'");
}else{
  echo("dsfdsfs");
}