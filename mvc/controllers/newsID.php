<?php
    require_once './mvc/models/news.php';

    // Класс, вызывающий метод класса модели news. 
    // Предназначен для вызова действий, приводящих к выводу отдельной новости.
    
    class NewsByID extends News{

        function IDcheck(){
            if(@$_GET['id']){
                parent->getNewsByID($_GET['id']);
            } 
        }
    }
?>

