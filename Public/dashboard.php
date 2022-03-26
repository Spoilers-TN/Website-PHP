<?php
  //beta-dev.spoilers.tn.it/index.php
  // Start the session
  session_start();
  include 'connessione.php';
    
?>

<!doctype html>
  <html lang="it">
    <head>
      <title>LIBRAIMOVIC: compra-vendita di libri</title>
    </head>
    <body>
      <h1>LIBRAIMOVIC</h1>
      
      <p>Per accedere al tuo profilo <a href="./Public/utente.php" />clicca qui.</a></p>
      
      <h3>Qui puoi cercare i tuoi libri!</h3>
      
      <input type="text" id="libro" placeholder="" name="libro">
      <button type="submit" name="libro">Cerca</button>
      
      <p>clicca qui per tornare alla <a href="./Public/index.php" />home</a></p>
    </body>
  </html>