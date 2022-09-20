<?php

    class NewsBox{
        function __construct($id, $date, $title, $anounce){
            $formatDate = date("d.m.Y", $date);
            $this->id = $id;
            $this->date=$formatDate;
            $this->title=$title;
            $this->anounce=$anounce;
        }

        function show(){
            return "<div class=\"block\">
            <div class=\"block-desc\">  
                <div class=\"block-desc__date\">"
                    . $this->date .
                "</div>
                <div class=\"block-desc__title\"><a href=\"news.php?id=$this->id\">"
                    . $this->title .
                "</a></div>
            </div>
                <div class=\"block-anounce\">"
                    . $this->anounce .
                "</div>
            </div>";
        }
    }
?>
    


