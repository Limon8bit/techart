<?php
    require_once './mvc/controllers/paginator.php';
    require_once './mvc/models/news.php';

    class Footer extends Paginator{

        function show(){
            if(@$_GET['id']){
                echo '<a href="./news.php">Все новости >></a>';
            } else {
                $paginator = new Paginator;
                $paginator->getPage();
                $paginator->show();
            }
        }
    }
?>





        