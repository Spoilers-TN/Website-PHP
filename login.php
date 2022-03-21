<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  

// Start the session
//session_start();

//echo "email" .$_SESSION["email"];


?>


<html>
    <head>
      <title>Login</title>
    </head>
    <body>
      <?php if(isset($_SESSION["email"])): ?>
        
        <form method="post" action="./login_worker.php">
            <h1>Login</h1>
            <input type="text" id="email" placeholder="Email" name="email">
            <input type="password" id="password" placeholder="password" name="password">
            <button type="submit" name="login">Accedi</button>
        </form>
        <p>Se non sei ancora registrato, clicca <a href="./register.php" />qui</a> per farlo </p>

      <?php else: ?>

      <div> Hai già eseguito il login <?php echo $_SESSION["email"]; ?></div>

      <?php endif ?>
      
    </body>
</html>