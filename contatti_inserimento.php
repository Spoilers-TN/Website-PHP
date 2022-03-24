<?php
    include 'connessione.php';
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Contatti inserimento</title>   
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if (!isset($error_message)) {
                if (isset($_POST['btnInserisci'])){
                    $nome           = ucwords(strtolower(trim(($_POST['txtNome']))));
                    $cognome        = ucwords(strtolower(trim(($_POST['txtCognome']))));
                    $codice_fiscale = trim(strtoupper($_POST['txtCodiceFiscale']));
                    $data_nascita   = $_POST['txtDataNascita']; //date("Y-n-j"); date("2022-01-31");
                    $ora_nascita    = $_POST['txtOraNascita'];  //date("H:i:s"); date("12:00:00");
                    
                    //$data_nascita   = str_replace("/", "-", $data_nascita);
                    //$timestamp      = strtotime($data_nascita);
                    //$data_nascita   = date("Y-m-d", $timestamp);        
                    
                    $query = "INSERT INTO tcontatti (nome, cognome, codice_fiscale, data_nascita, ora_nascita) "
                           . "VALUES('$nome', '$cognome', '$codice_fiscale', '$data_nascita', '$ora_nascita')";

                    $insert = mysqli_query($db_conn, $query);

                    if ($insert != null)
                        $message = "Contatto inserito con successo!";
                    else
                        $message = "Contatto già esistente";

                    echo $message;     
                    
                    header("refresh:3; index.php");
                } else {
        ?>
                    <form name="frmContattiInserimento" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                        <table>
                            <tr>
                                <td>Nome</td>
                                <td>
                                    <input type="text" name="txtNome">
                                </td>
                            </tr>
                            <tr>
                                <td>Cognome</td>
                                <td>
                                    <input type="text" name="txtCognome">
                                </td>                            
                            </tr>
                            <tr>
                                <td>Codice Fiscale</td>
                                <td>
                                    <input type="text" name="txtCodiceFiscale">
                                </td>                            
                            </tr>  
                            <tr>
                                <td>Data di nascita</td>
                                <td>
                                    <input type="date" name="txtDataNascita">
                                </td>                            
                            </tr>     
                            <tr>
                                <td>Ora di nascita</td>
                                <td>
                                    <input type="time" name="txtOraNascita">
                                </td>                            
                            </tr>                          
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="btnInserisci" value="Inserisci">
                                    <input type="button" name="btnAnnulla" value="Annulla" onClick="javascript:history.back()">
                                </td>
                            </tr>
                        </table>
                    </form>
        <?php
                }
            } else {
                echo $error_message;                
                
                header("refresh:3; index.php");
            }
        ?>
    </body>
</html>