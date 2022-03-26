<?php
session_start();
  include '/Private/connessione.php';


if(isset($_POST["bio"])){
  echo $_POST["bio"];
}
?>