<?php
session_start();
  include '../Private/connessione.php';

?>

<html>
  <title>DATI UTENTI</title>
  
  <h1>DATI UTENTE</h1>
  <img src="<?php echo "https://robohash.org/".$_SESSION["email"].".png"?>" width="150px" height="150px">
  <br>
  <br>
</html>
<?php
  
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
</html>
 