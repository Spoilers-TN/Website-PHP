<html>
  <title>DATI UTENTI</title>
  
  <h1>DATI UTENTE</h1>
</html>

<?php
  //inizio sessione
  session_start();
  
  if(isset($_SESSION["logged"])){
      echo "Welcome: ".$_SESSION["nome"]." ";
      echo  $_SESSION["cognome"]."</br>";
      echo "Questi sono i tuoi dati:"."</br>";
      echo "Nome: " .$_SESSION["nome"]."</br>";
      echo "Cognome: ".$_SESSION["cognome"]."</br>";
      echo "Email: ".$_SESSION["email"]."</br>";
      echo "Classe: ".$_SESSION["classe"]."</br>";
      echo "Indirizzo: ".$_SESSION["indirizzo"]."</br>";
      echo "<p>Per comprare libri <a href=\"./dashboard.php\" />clicca qui.</a></p>";
      
  }else{
    echo "<p>non sei registrato!!!</p>";
  }
?>

<html>
  <p>Clicca qui per modificare il <a href="./settings.php"/>profilo</a></p>
  <p>clicca qui per tornare alla <a href="./index.php" />home</a></p>
  <p>clicca qui per il <a href="./settings.php" />settings</a></p>
</html>
 