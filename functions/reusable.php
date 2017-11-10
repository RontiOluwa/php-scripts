<?php 
    include_once('../config/db-config.php');

        global $db_con;
        $db_con = new mysqli($host, $user, $password, $db_name);
    if($db_con->connect_errno){
         echo "Failed to Connect to SQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else{
        echo "Success Connection to SQL db_name : ".$db_name. " hosted server : ".$host ."hosted user : ".$user;
    }
    
    