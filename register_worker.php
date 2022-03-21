<?php
session_start();
/*
$_SESSION["nome"] = $_POST["nome"];
$_SESSION["cognome"] = $_POST["cognome"];
$_SESSION["classe"] = $_POST["classe"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["data"] = $_POST["data"];
$_SESSION["logged"] = true;
$_SESSION["registed"] = true;
*/

$_SESSION["nome"] = "mario";
$_SESSION["cognome"] = "rossi";
$_SESSION["classe"] = "4ina";
$_SESSION["email"] = "mario.rossi@mail.com";
$_SESSION["password"] = "sium";
$_SESSION["data"] = "21/03/2022";
$_SESSION["logged"] = true;

header("location: /utente.php");
?>


