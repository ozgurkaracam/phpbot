<?php
    require "simple_html_dom.php";
    if(isset($_GET["filmId"])){
        
            $filmId=$_GET["filmId"];
            $html=str_get_html(file_get_contents("https://www.sinefil.com/title/".$filmId));
            foreach($html->find('div.readmore p') as $element){
                        echo $element->plaintext;
            }

    }

    ?>