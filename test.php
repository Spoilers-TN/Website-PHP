<?php
session_start();
  include '/Priconnessione.php';


if(isset($_POST["bio"])){
  echo $_POST["bio"];
}
?>