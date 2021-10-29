<?php

namespace Dodkirua\LinksHandler\Controller;

use Dodkirua\LinksHandler\Model\Manager\LinkManager;
use Dodkirua\LinksHandler\Model\Manager\UserManager;
use Dodkirua\LinksHandler\Utility\Security;
use Dodkirua\LinksHandler\Utility\Utility;

class IndexController extends Controller{

    public static function display($error = null){
        $data['error'] = $error;
        $data['link'] = LinkManager::getAll();
        self::render('index','Index',$data);
    }

    /**
     * function to connect user
     * -5 $_POST transmission problem
     * -6 wrong pass
     * -9 unknown user
     * @return int
     */
    public static function connect():int {
        if (!is_null($_POST['mail']) && !is_null($_POST['pass'])){

            $user = UserManager::getByMail(Security::sanitize($_POST['mail']));
            if (!is_null($user)){
                $userArray = $user->getAllData();
                if (password_verify($_POST['pass'],$userArray['pass'])){
                    Utility::addToSession($userArray,'user');
                    return 1;
                }
                else {
                    return -6;
                }
            }
            else {
                return -9;
            }
        }
        else {
            return -5;
        }

    }

}