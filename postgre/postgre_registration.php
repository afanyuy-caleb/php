<?php

    include_once('postgre_dbconnect.php');
    
    $insert = "INSERT INTO public.city values(10, 'Bali', 40000.34)";

    if(pg_query( $dbconn, $insert)){
        echo 'Successful entry of data';
    }
    else
        echo 'Failed entry';
        echo "Please check your database connection credentials";
?>
