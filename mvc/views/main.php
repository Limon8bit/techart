<?php
    include_once './mvc/models/news.php';
    include_once './mvc/views/newsbox.php';
    include_once './mvc/views/IDview.php';


    class Main extends News{

        function __construct(){
            parent::__construct();
            $this->query=$this->getNews();
        }

        function show(){

            $result = $this->query;
            if(!@$_GET['id']){
                if(@$_GET['page'] && $_GET['page'] !== 1){
                $page = $_GET['page'];
                $start = ($page * 5) - 5;
                $pageOfNews = array_slice($result, $start, 5);
                } else {
                    $pageOfNews = array_slice($result, 0, 5);
                }

                foreach($pageOfNews as $row){
                    $news = new NewsBox($row['id'], $row['idate'], $row['title'], $row['announce']);
                    echo $news->show();
                };
            } else {
                $res = $this->getNewsByID($_GET['id']);
                $main = new IDview($res);
            }
            
        }
    }
?>