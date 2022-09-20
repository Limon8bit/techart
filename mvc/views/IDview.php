<?php
    require_once './mvc/views/header.php';

    class IDview{

        function __construct(array $data){
            $this->content = $data['content'];
            $this->show();
        }

        function show(){
            echo $this->content;
        }
    }
?>