<?php
// Start the session
session_start();

$_SESSION["email"] = htmlentities($_POST["email"]);
$_SESSION["password"] = htmlentities($_POST["password"]);
$
?>

<html>
<body>

Welcome <?php echo $_POST["email"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<p>clicca qui per tornare al <a href="./login.php" />login</a></p>
  
</body>
</html>