<?php
// Start the session
session_start();

$_SESSION["email"] = htmlentities($_POST["email"]);
$_SESSION["password"] = htmlentities($_POST["password"]);
$_SESSION["logged"] = true;

?>

<html>
<body>

Welcome <?php echo $_POST["email"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<p>clicca qui per tornare alla <a href="./index.php" />home</a></p>
  
</body>
</html>