<?php
session_start();

$_SESSION["nome"] = $_POST["nome"];
$_SESSION["cognome"] = $_POST["cognome"];
$_SESSION["classe"] = $_POST["classe"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["data di nascita"] = $_POST["data di nascita"];

header("location: /utente.php");
?>