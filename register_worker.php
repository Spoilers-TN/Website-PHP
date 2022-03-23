<?php
session_start();

$_SESSION["nome"] = $_POST["nome"];
$_SESSION["cognome"] = $_POST["cognome"];
$_SESSION["classe"] = $_POST["classe"];
$_SESSION["indirizzo"] = $_POST["indirizzo"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["logged"] = true;


header("location: /dashboard.php");
?>


