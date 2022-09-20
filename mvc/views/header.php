<?php
    include_once './mvc/models/news.php';

    class Header extends News{

        function __construct(){
            parent::__construct();
            $this->title = "Новости";
        }

        function show(){
            if (@$_GET['id']){
                $res = $this->getNewsByID(@$_GET['id']);
                $this->title = $res['title'];
            }
            echo "<h1>" . $this->title . "</h1>";
        }
    }
?>



