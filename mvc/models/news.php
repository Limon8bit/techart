<?php
    ini_set('display_errors', 1);
    require_once './mvc/core/connect.php';
    require_once './mvc/views/IDview.php';
    require_once './mvc/views/header.php';
    
    // Класс, описывающий получение записей из бд на основании корового класса connect
    class News extends Connect{

        function __construct(){
            $this->dbh = parent::connect();
        }

        // Метод, возвращающий отсортированный массив новостей из бд.
        function getNews($sql='SELECT * FROM news ORDER BY idate DESC, id DESC'){
            $dbh = $this->dbh;
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        // Метод, возвращающий отдельную новость в соответствии с id из $_GET запроса.
        function getNewsByID($id){
            $dbh = $this->dbh;
            $sql = "SELECT id, title, content FROM news WHERE id='$id'";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetch();
            return $result;
        }
    }
?>