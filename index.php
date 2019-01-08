<?php require("header.php"); ?>
  <div class="conteiner">
    <div class="conteiner-fluid">
      <div class="row">
        <div class="col-md-9">
          <?php
          $html = str_get_html(file_get_contents('https://www.sinefil.com/mini-diziler'));  // Siteye bağlan
          //$html = file_get_html('http://www.google.com/');  // Bu şekildede kullanılabilir.


          foreach($html->find('div.movie div.col-lg-9 h3 a') as $element)  // Sitedeki tüm "a" elementlerini ara
          {
              $str=explode("/",$element->href);
              echo "<a href=detay.php?filmId={$str[4]}>";
                 echo $element->plaintext."</a><br>";

          }
           ?>
        </div>
        <div class="col-md-3">
          <h1>Menü.</h1>

        </div>

      </div>

    </div>

  </div>

<?php require("footer.php"); ?>
