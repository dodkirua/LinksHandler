<?php

echo "</div>";

echo "</div>";

/* @var string $view render's parameter*/
if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/assets/js/" . $view . ".js")){ ?>
    <script src="/assets/js/<?= $view ?>.js" type="module"></script> <?php
}
echo "<script src='/public/assets/js/index.js' type='module'></script>";



echo "</body>";
echo "</html>";