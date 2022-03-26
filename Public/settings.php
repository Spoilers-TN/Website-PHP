<?php
  session_start();
  include 'connessione.php';

?>

<!doctype html>
<html>
  <form>

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
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label>Imposta la tua biografia.</label>
                        <div class="form-group">
                          <input type="text" class="form-control" rows="3" id="biografia" name="biografia"
                            placeholder="<?php $User_Biog ?>" required>
                          <button type="submit" name="save_bio" id="save_bio">
                            Salva
                          </button>
                          <?php $_SESSION["biografia"] = $_POST["biografia"]?>
<?php $query = "INSERT INTO users (User_Biog)"."VALUES('".$_SESSION["biografia"]."')";

                    $insert = mysqli_query($db_conn, $query);?></br>
                        </div>

                      <!--bottone salva-->
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="float-right">
                              
                              
                              <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#saveButton" name="salva">
                                Salva modifiche
                              </button>
                            
                            </div>
                          </div>
                        </div>
                      </div>
                      </form>
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
                              <a class="btn btn-warning" href="/Public/dashboard.html">Sì</a>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
          </div>
      </div>

</html>