<?php
  //start the session
  session_start();
  include 'connessione.php';

?>

<!doctype html>
<html>
  <head>
    <title>Registrazione</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="/css/style.css">
  </head>
    <body>
        <form method="post" action="./register_worker.php">
          <h1>Registrazione</h1>
          
          <input type="classe" id="classe" placeholder="Classe" name="classe" required><br>
          <input type="indirizzo" id="indirizzo" placeholder="Indirizzo" name="indirizzo" required><br>
          <button type="submit" name="register">Registrati</button>
        </form>       
    </body>
</html>