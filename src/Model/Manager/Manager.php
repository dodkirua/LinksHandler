<?php
namespace Dodkirua\LinksHandler\Model\Manager;

class Manager{
    private static ?self $manager = null;

    /**
     * get the Manager
     * @return Manager
     */
    public static function getManager() : self    {
        if (is_null(self::$manager)){
            self::$manager = new self();
        }
        return self::$manager;
    }
}