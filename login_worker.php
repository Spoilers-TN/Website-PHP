<?php
// Start the session
session_start();

if(isset($_SESSION["logged"])){
  header("location: /dashboard.php?");
}else{
  echo("Non sei registrato clicca <a href='./register.php' />qui</a> per registrarti");
}