<?php
//start the session
session_start();
?>
<html>
<title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <form method="post" action="./register_worker.php">
          <h1>Registrazione</h1>
          <input type="nome" id="nome" placeholder="Nome" name="nome" required><br>
          <input type="cognome" id="cognome" placeholder="Cognome" name="cognome" required><br>
          <input type="data di nascita" id="data di nascita" placeholder="Data di nascita" name="data di nascita" required><br>
          <input type="classe" id="classe" placeholder="Classe" name="classe" required><br>
          <input type="text" id="email" placeholder="Email(username)" name="email" required><br>
          <input type="password" id="password" placeholder="password" name="password" required><br>
          <button type="submit" name="register">Registrati</button>
        </form>
      <p>clicca qui per il <a href="./login.php" />login</a></p>
    </body>
</html>