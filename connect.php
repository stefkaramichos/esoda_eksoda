<?php

    
        $db['dbhost'] = 'localhost';
        $db['dbuser'] = 'root';
        $db['dbpass'] = '';
        $db['dbname'] = 'esoda_eksoda';
        
        foreach($db as $key => $value){
            define(strtoupper($key), $value);
        }
        $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if(!$connection){
            die("Connection FAILED!");
        }
        
        
       
       
    
        
    
    
?>