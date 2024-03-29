<?php
session_start();
ini_set("display_errors", E_ALL);

use Dodkirua\LinksHandler\Controller\AccountController;
use Dodkirua\LinksHandler\Controller\IndexController;
use Dodkirua\LinksHandler\Controller\LinkController;
use Dodkirua\LinksHandler\Controller\UserController;

require '../vendor/autoload.php';

if (isset($_GET['ctrl'])){
    switch ($_GET['ctrl']){
        case 'addLink' :
                LinkController::display();
            break;
        case 'account' :
            AccountController::display();
            break;
        case 'UserInfoMod' :
            AccountController::display('UserInfoMod', 'Modification des informations');
            break;
        case 'passwordMod' :
            AccountController::display('passwordMod','Modifications du password');
            break;
        case 'form':
            switch ($_GET['action']){
                case 'connect' :
                    $error = AccountController::connect();
                    if ($error === 1){
                        IndexController::display();
                    }
                    else {
                        IndexController::display($error);
                    }
                    break;
                case 'addLink' :
                    $error = LinkController::add();
                    if ($error !== 1){
                        LinkController::display($error);
                    }
                    else {
                        LinkController::display();
                    }
                    break;
                case 'disconnect':
                    AccountController::disconnect();
                    IndexController::display();
                    break;
                case 'passwordMod' :
                    $error = UserController::passwordMod();
                    AccountController::display('passMod','Modifications du password',$error);
                    break;
                case 'UserInfoMod' :
                    $error = UserController::userInfoMod();
                    AccountController::display('modUserInfo', 'Modification des informations',$error);
                    break;
                case 'UserMailMod' :
                    $error = UserController::modMail();
                    AccountController::display('modUserInfo', 'Modification des informations',$error);
                    break;
                default:
                break;
            }
        break;
        default :
            IndexController::display();
    }
}
else {
    IndexController::display();
}