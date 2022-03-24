<?php
session_start();

if(isset($_POST["bio"])){
  echo $_POST["bio"];
}
?>