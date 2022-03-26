<?php
    include 'connessione.php';
    
    $con = 0;
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Contatti ricerca</title>   
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if (!isset($error_message)) {
                if (isset($_POST['btnRicerca'])){
                    $ricerca = trim(($_POST['txtRicerca']));

                    $query    = "SELECT id_contatti, nome, cognome, codice_fiscale, data_nascita, ora_nascita from tcontatti WHERE nome LIKE '%$ricerca%' OR cognome LIKE '%$ricerca%'";
                                
                    $resulset = @mysqli_query($db_conn, $query);
                            
                    if(@mysqli_num_rows($resulset)!=0) {
        ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>                                                
                                    <th>Cognome</th>
                                    <th>Codice Fiscale</th>
                                    <th>Data di nascita</th>
                                    <th>Ora di nascita</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php
                                while($row = mysqli_fetch_array($resulset, MYSQLI_ASSOC)) {                                                                               
                                    $con += 1;
                                    $id_contatti    = $row["id_contatti"];
                                    $nome           = utf8_decode($row["nome"]);
                                    $cognome        = $row["cognome"];
                                    $codice_fiscale = $row["codice_fiscale"];
                                    $data_nascita   = $row["data_nascita"];
                                    $ora_nascita    = $row["ora_nascita"];

                                    $timestamp = strtotime($data_nascita);
        ?>
                                    <tr>
                                        <th><?php echo $con                       ?></th>
                                        <td><?php echo $nome                      ?></td>                                                
                                        <td><?php echo $cognome                   ?></td>
                                        <td><?php echo $codice_fiscale            ?></td>
                                        <td><?php echo date("d/m/Y", $timestamp); ?></td>
                                        <td><?php echo $ora_nascita               ?></td>
                                    </tr>
        <?php
                                }
        ?>
                            </tbody>
                        </table>		
                        <br>
                        <a href="Public/index.php">Torna indietro</a>
        <?php        
                    } else {
                        $message = "Nessun contatto presente!";
                        
                        echo $message;
                        
                        header("refresh:3; Public/index.php");
                    }
                } else {
        ?>
                    <form name="frmRicerca" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <table>
                            <tr>
                                <td>Ricerca</td>
                                <td>
                                    <input type="text" name="txtRicerca">
                                </td>
                            </tr>                            
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="btnRicerca" value="Ricerca">
                                    <input type="button" name="btnAnnulla" value="Annulla" onClick="javascript:history.back()">
                                </td>
                            </tr>
                        </table>
                    </form>  
        <?php
                }
            } else {
                echo $error_message;                
                
                header("refresh:3; Public/index.php");
            }
        ?>
    </body>
</html>