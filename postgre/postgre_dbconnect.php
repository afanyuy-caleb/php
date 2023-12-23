<?php
    
    // php connect to postgre
    $host = "localhost";
    $port = "5432";
    $dbname = "registration";
    $user = "postgres";
    $password = "root";

    $dbconn = pg_connect("host={$host} port={$port} dbname={$dbname} user={$user} password={$password}");

    if(!$dbconn){
        die('Connection failed');
    }
?>