<?php
    $db_host = '127.0.0.1';
    $db_user = 'spoilersdb';
    $db_pass = 'UVF8Bjqn';
    $db_name = 'BookPlatform';

    try{           
        $db_conn = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        
        if ($db_conn==null)
            throw new exception (mysqli_connect_error(). ' Error n.'. mysqli_connect_error());
    } catch (Exception $e){
        $error_message = $e->getMessage();        
    }
?>  