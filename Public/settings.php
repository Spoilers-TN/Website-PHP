<?php
  session_start();
  include '../Private/connessione.php';

?>

<!doctype html>
<html>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Modifica profilo</h4>
    </div>
    <div class="form-group">
      <label>Dati anagrafici</label>
      <input type="email" class="form-control" readonly placeholder=<?php echo $_SESSION["email"]; ?>>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" readonly placeholder=<?php echo $_SESSION["nome"] ?>>
      </div>
      <div class="col">
        <input type="text" class="form-control" readonly placeholder=<?php echo $_SESSION["cognome"] ?>>
      </div>
    </div>
  
    <br>
    <form method="POST">
      
      <label>Imposta la tua biografia.</label>
      
      <div class="form-group">
        
        <input type="text" class="form-control" rows="3" id="biografia" name="biografia" placeholder="Biografia" required>
        
        <button type="submit" name="save_bio" id="save_bio">
          Salva
        </button>
  
        <?php
          if(isset($_POST["save_bio"])){
            $_SESSION["biografia"] = $_POST["biografia"];
            $query = "UPDATE Users SET User_Biog='".$_SESSION["biografia"]."' WHERE User_ID='".$_SESSION["email"]."'";
            //$query = "UPDATE INTO Users (User_Biog) WHERE User_ID='".$_SESSION["email"]."' SET User_Biog='".$_SESSION["biografia"]."'";
            //$insert = mysqli_query($db_conn, $query);
            if ($db_conn->query($query) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db_conn->error;
            }
          }
          //mysqli_query($db_conn, "SELECT User_Biog FROM Users WHERE User_ID='".$_SESSION["email"]."'");
        ?>

      </div>
    </form>
  </div>
  
  <br>
  
  <div>
    <!-- Modal -->
    <div class="modal fade" id="saveButton" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="saveChanges" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">  
            <h5 class="modal-title" id="saveChanges">Salvare modifiche</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Sei sicuro di voler salvare le modifiche?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
            <a class="btn btn-warning" href="./dashboard.html">S??</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</html>