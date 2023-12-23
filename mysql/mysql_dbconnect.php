<?php
 
    try{
        $dsn = "mysql:host=localhost; dbname=Products";
        $conn = new PDO($dsn, 'Keyz_dev', 'cream');
        
    }catch(PDOException $e){
        die('Error '.$e->getMessage());
    }
   
?>