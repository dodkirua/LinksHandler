<?php

namespace Dodkirua\LinksHandler\Controller;

use Dodkirua\LinksHandler\Model\Manager\UserManager;
use Dodkirua\LinksHandler\Utility\Security;

class UserController extends Controller{

    /**
     * mail modification
     * -5 $_POST problem
     * -7 update DB problem
     * -14 email exist in DB
     * -15 new and old mail is equal
     * @return int
     */
    public static function modMail(): int    {
        if (isset($_POST['mail'])){
            if ($_POST['mail'] !== $_SESSION['user']['mail']){
                if (is_null(UserManager::getByMail($_POST['mail']))){
                    $data['mail']= $_POST['mail'];
                    if (UserManager::update($_SESSION['user']['id'],$data)){
                        return 1;
                    }
                    else {
                        return -7;
                    }
                }
                else {
                    return -14;
                }
            }
            else {
                return -15;
            }
        }
        else {
            return -5;
        }

    }

    /**
     * user info modification
     * -5 $_POST problem
     * -7 update DB problem
     * @return int
     */
    public static function userInfoMod() : int    {
        if (isset($_POST['name']) && isset($_POST['surname'])){
            $data['name']= $_POST['name'];
            $data['surname']= $_POST['surname'];
            if (UserManager::update($_SESSION['user']['id'],$data)){
                return 1;
            }
            else {
                return -7;
            }
        }
        else{
            return -5;
        }
    }

    /**
     * modification of password
     * -3 password not enough strong
     * -5 $_POST problem
     * -6 wrong old password
     * -7 DB udpdate problem
     * -16 pass and verif pass is different
     * -17 old pass and new pass is equals
     * @return int
     */
    public static function passwordMod() :int  {
        if (password_verify($_POST['old'],$_SESSION['user']['pass'])){
            if ($_POST['old'] !== $_POST['new']){
                if ($_POST['new'] === $_POST['verif']){
                    $pass = $_POST['new'];
                    if (Security::checkPass($pass)){
                        $data['pass'] = password_hash($pass,PASSWORD_BCRYPT);
                        if (UserManager::update($_SESSION['user']['id'],$data)){
                            return 1;
                        }
                        else {
                            return -7;
                        }
                    }
                    else {
                        return -3;
                    }
                }
                else {
                    return -16;
                }
            }
            else {
                return -17;
            }
        }
        else {
            return -6;
        }
    }
}