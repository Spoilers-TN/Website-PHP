<?php
  //beta-dev.spoilers.tn.it/index.php
  // Start the session
  session_start();
  include 'Private/connessione.php';

?>

<!doctype html>
  <html lang="it">
    <head>
      <title>BOOKFINDER: compra-vendita di libri</title>
    </head>
    <body>
      
      <h1>BOOKFINDER</h1>
      
      <h3>Created by 4INA!</h3>
      
      <p>Ciao! Siamo la 4ina e abbiamo redatto questo sito per la <strong>compra-vendita</strong> dei libri scolastici.</p>
      <p>Clicca qui per il
      <?php 
        if(!isset($_SESSION["logged"])){
          echo "<a href=\"./Public/login.php\" />login</a></p>";
        }
        else{
          echo "<a href=\"./Public/redirect.php\" />login</a></p>";
        }
      ?>
      </p>
      <p>Per accedere al nostro sito Web <a href="https://www.spoilers.tn.it" target="_blank" />clicca qui.</a></p>
      <?php
        if(isset($_SESSION["logged"])){
          echo "<p>Per accedere al tuo profilo <a href=\"./Public/utente.php\" />clicca qui.</a></p>";
          echo("<p>Sei loggato</p>");
          echo "<p>Clicca qui per effettuare il <a href=\"./Public/close_session.php\" />logout</a></p>";
        }else{
          echo("<p>non sei loggato!</p>");
        }
      ?>
    </body>
  </html>