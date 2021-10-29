<?php

use Dodkirua\LinksHandler\Model\Entity\Link;


if (is_null($_SESSION['user'])){
    echo "
    <div>
    Veuillez vous connecter.
    </div>
    ";
}
else {
    /* @var array $var render parameter
     *  @var Link $link
     */
    foreach ($var['link'] as $link){
        /* @var Link $link*/
        $img = $link->getHref();
        if (is_null($img)){
            $img =  'default.jpg';
            $name = 'default';
        }
        echo "
        <div class='link'>
            <div class='linkImg'><img src='./assets/img/link/$img' alt='$name'></div>
            <div class='divLink'><a href='" . $link->getTarget() . "'>" . $link->getTitle() . "</a></div>
        </div>
        ";
    }
}

?>