<?php
session_start();
  include 'connessione.php';


if(isset($_POST["bio"])){
  echo $_POST["bio"];
}
?>