<?php

use Dodkirua\LinksHandler\Controller\IndexController;

require '../vendor/autoload.php';

if (isset($_GET['ctrl'])){
    switch ($_GET['ctrl']){
        case 'addLink' :

            break;
        case 'form':
            switch ($_GET('action')){
                case 'connect' :
                    $error = IndexController::connect();
                    break;
                break;
                default:
                break;
            }

        default :
            IndexController::display();
    }
}
else {
    IndexController::display();
}