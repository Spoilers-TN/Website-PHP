<html>
  <title>DATI UTENTI</title>
</html>
<?php
//inizio sessione
session_start();

if(isset($_SESSION["logged"]) && $_SESSION["logged"]==true){
    echo "Welcome: ".$_SESSION["nome"].$_SESSION["cognome"]."</br>";
    echo "Questi sono i tuoi dati:"."</br>";
    echo "Nome: " .$_SESSION["nome"]."</br>";
    echo "Cognome: ".$_SESSION["cognome"]."</br>";
    echo "Classe: ".$_SESSION["classe"]."</br>";
    echo "Email: ".$_SESSION["email"]."</br>";
    echo "Data di nascita: ".$_SESSION["data"]."</br>";
}else{
  echo "<p>non sei registrato!!!</p>";
}
?>


<html>
  <p>clicca qui per registrarti <a href="./registrer.php" />registrati</a></p>
  <p>clicca qui per tornare alla <a href="./index.php" />home</a></p>
</html>
