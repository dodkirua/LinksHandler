<?php

namespace Dodkirua\LinksHandler\Controller;

use Dodkirua\LinksHandler\Model\Manager\LinkManager;


class IndexController extends Controller{

    /**
     * display index
     * @param int|null $error
     */
    public static function display(int $error = null){
        $data['error'] = $error;
        $data['link'] = LinkManager::getAll();
        self::render('index','Index',$data);
    }



}