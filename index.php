<?php
  //beta-dev.spoilers.tn.it/index.php
  // Start the session
  session_start();
?>

<!doctype html>
  <html lang="it">
    <head>
      <title>LIBRAIMOVIC: compra-vendita di libri</title>
    </head>
    <body>
      
      <h1>LIBRAIMOVIC</h1>
      
      <h3>Created by 4INA!</h3>
      
      <p>Ciao! Siamo la 4ina e abbiamo redatto questo sito per la <strong>compra-vendita</strong> dei libri scolastici.</p>
      <p>Clicca qui per il <a href="./login.php" />login</a></p>
      <p>Per accedere al nostro sito Web <a href="https://www.spoilers.tn.it" target="_blank" />clicca qui.</a></p>
      
      <?php
        if(isset($_SESSION["logged"])){
          echo "<p>Per accedere al tuo profilo <a href=\"./utente.php\" />clicca qui.</a></p>";
          echo("<p>Sei in una sessione!</p>");
          echo "<p>Clicca qui per chiudere la <a href=\"./close_session.php\" />sessione</a></p>";
        }else{
          echo("<p>non sei in una sessione!</p>");
        }
      ?>

    </body>
  </html>