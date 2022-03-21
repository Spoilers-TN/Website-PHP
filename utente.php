<?php
//inizio sessione
session_start();
    echo "Welcome: " .$_SESSION["email"]."</br>";
    echo "Questi sono i tuoi dati:"."</br>";
    echo "Nome: " .$_SESSION["nome"]."</br>";
    echo "Cognome: ".$_SESSION["cognome"]."</br>";
    echo "Classe: ".$_SESSION["classe"]."</br>";
    echo "Data di nascita: ".$_SESSION["data di nascita"]."</br>";
?>

