<?php
    $db_host = '170.187.185.240';
    $db_user = 'spoilersdb';
    $db_pass = '';
    $db_name = 'Spoilers-DB@170.187.185.240';

    try{           
        $db_conn = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        
        if ($db_conn==null)
            throw new exception (mysqli_connect_error(). ' Error n.'. mysqli_connect_error());
    } catch (Exception $e){
        $error_message = $e->getMessage();        
    }
?>

    $db_host = '170.187.185.240';
    $db_user = 'spoilersdb';
    $db_pass = '';
    $db_name = 'Spoilers-DB@170.187.185.240';