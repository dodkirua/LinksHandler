<?php

namespace Dodkirua\LinksHandler\Controller;

use Dodkirua\LinksHandler\Model\Manager\LinkManager;
use Dodkirua\LinksHandler\Utility\Security;

class LinkController extends Controller{

    /**
     * display link add form
     * @param int|null $error
     */
    public static function display (int $error = null){
        $data['error'] = $error;
        $data['css'] = 'addLink';
        self::render('addLink','Ajout lien',$data);
    }

    public static function add() : int{
        if (!isset($_POST['href']) || !isset($_POST['title']) ){
            return -5;
        }
        else {
            $data['href'] = Security::sanitize($_POST['href']);
            $data['title'] = Security::sanitize($_POST['title']);
            if (isset($_POST['target'])){
                $data['target'] = Security::sanitize($_POST['target']);
            }
            if (isset($_POST['name'])){
                $data['name'] = Security::sanitize($_POST['name']);
            }
            if (LinkManager::add($data)){
                return 1;
            }
            else {
                return -1;
            }

        }
    }
}