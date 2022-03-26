<?php
  $_SESSION["biografia"] = $_POST["biografia"];
  if(isset($_SESSION["biografia"])){
    $query = "UPDATE INTO Users (User_Biog) WHERE User_ID=".$_SESSION["email"]."SET User_Biog=".$_SESSION["biografia"];
    $insert = mysqli_query($db_conn, $query);
    echo $_SESSION["biografia"];
  }
  else{
    echo "Non va :)";
  }
  echo "<br>La tua biografia:<br>".$_SESSION["biografia"];
?>