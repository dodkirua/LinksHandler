<?php



echo "</div>";

/* @var string $view render's parameter*/
if (file_exists( "../../public/assets/js/" . $view . ".js")){ ?>
    <script src="./public/assets/js/<?= $view ?>.js" type="module"></script> <?php
}
echo "<script src='./assets/js/index.js' type='module'></script>";
if (isset($var['js'])){
    foreach ($var['js'] as $js){
        echo "<script src='./assets/js/" . $js . ".js' type='module'></script>";
    }
}


echo "</body>";
echo "</html>";