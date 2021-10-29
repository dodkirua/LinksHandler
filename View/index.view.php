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
        //$img = "/assets/img/link/" . $link->getUser()->getId() . $link->getName() . $link->getId();
       // if (file_exists($img)){
            $img =  '/assets/img/link/default.jpg';
       // }
        $name = $link->getName() ;
        echo "
        <div class='link'>
            <div class='linkImg'><img src='$img' alt='$name'></div>
            <div class='divLink'><a href='" . $link->getHref() . "' title='" . $link->getTitle() . "' target='" . $link->getTarget() ."' >" . $name. "</a></div>
        </div>
        ";
    }
}

?>