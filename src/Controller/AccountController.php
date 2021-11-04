<?php

namespace Dodkirua\LinksHandler\Controller;

use Dodkirua\LinksHandler\Model\Manager\UserManager;
use Dodkirua\LinksHandler\Utility\Security;
use Dodkirua\LinksHandler\Utility\Utility;

class AccountController extends Controller{

    /**
     * display account panel
     * @param int|null $error
     */
    public static function display(string $view = null ,string $title = null, int $error = null){
        if (is_null($view)){
            $view = 'account';
        }
        if (is_null($title)){
            $title = 'Account panel';
        }
        $data['error'] = $error;
        $data['css'] = 'account';
        self::render($view, $title ,$data);
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

    /**
     * disconnect the user
     */
    public static function disconnect(){
        $_SESSION = [];
        session_destroy();
    }

}