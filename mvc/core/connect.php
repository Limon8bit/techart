<?php

    // Реализация подключения к БД посредством PDO 
    
    class Connect{

        static function connect(){
            try {
                $dbh = new PDO(
                    'mysql:dbname=news;host=localhost', 
                    'root', 
                    'root');

            } catch (PDOException $e) {
                die($e->getMessage());
            }
            return $dbh;
        }
    }
?>