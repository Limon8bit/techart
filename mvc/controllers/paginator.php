<?php
    require_once './mvc/models/news.php';

    // Класс, описывающий пагинатор.

    class Paginator{
        function __construct(){
            $this->news = new News;
            $this->news = $this->news->getNews();
            $this->counting();
            $this->result = array();
        }


        // Метод, подсчитывающий общее кол-во строк в бд.
        function counting(){
            $news = $this->news;
            $count = ceil(count($news) / 5);
            $this->count = $count;
        }

        // Метод, обрабатывающий $_GET запрос на наличие ключа страницы.
        function getPage(){
            if(isset($_GET['page'])){
                $this->page = $_GET['page'];
            } else {
                $this->page = 1;
            } 
        }

        // Метод, отображающий пагинатор как html объект
        function show(){
            $count = $this->count;
            echo "<div class='paginator__description'>Страницы :</div>";
            foreach (range(1, $count) as $i){
                $class = "";
                if ($i == $this->page){
                    $class = "class='paginator-button active'>";
                } else {
                    $class = "class='paginator-button'>";
                }
                if ($i == 1){
                    echo "<a href=\"./news.php\"><button " . $class . $i . "</button></a>";
                } else {
                    echo "<a href=\"./news.php?page=" . $i ."\"><button " . $class . $i . "</button></a>";
                }
            }
        }
    }
?>