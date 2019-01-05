<?php
    require "simple_html_dom.php";
    
    if(isset($_GET["filmId"])){
        
            $filmId=$_GET["filmId"];
            $html=str_get_html(file_get_contents("https://www.sinefil.com/title/".$filmId));
            $title=$html->find('span.title')[0]->plaintext;
            $puan=$html->find('p#RatingSinefil')[0]->plaintext."<br>";
            echo "<h3>Film Adı : ".$title."</h3>";
            echo "Puan :".$puan;
            foreach($html->find('div.readmore p') as $element){
                        echo $element->plaintext;
            }

    }

    ?>