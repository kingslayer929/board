<?php

    include_once "config.php";

    class dbconnect{
        function connect(){
            try{
                $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
                return new PDO($dsn, DB_USER, DB_PASSWD);
            }
            catch(PDOException $e){
                echo "connect failed!";
                exit;
            }
        }
    }
?>