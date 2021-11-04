<?php

namespace Dodkirua\LinksHandler\Model\Manager;


use Dodkirua\LinksHandler\Model\DB;
use Dodkirua\LinksHandler\Model\Entity\Link;
use PDOStatement;

class LinkManager extends Manager{

    /**
     * return a Link by id
     * @param int $id
     * @return Link|null
     */
    public static function getById (int $id) : ?Link{
        $request = DB::getInstance()->prepare("SELECT * FROM prefix_link where id= :id");
        $request->bindValue(":id",$id);
        return self::getOne($request);
    }


    /**
     * return an array with all the Link
     * @return array
     */
    public static function getAll() : array {
        $request = DB::getInstance()->prepare("SELECT * FROM prefix_link");
        return self::getMany($request);
    }

    /**
     * update on DB with id
     * @param int $id
     * @param array|null $var
     * @return bool
     */
    public static function update(int $id, array $var = null) : bool{
        if (is_null($var['href']) || is_null($var['title']) || is_null($var['target']) || is_null($var['name']) ) {
            $data = self::getById($id);
            if (is_null($var['name'])) {
                $var['name'] = $data->getName();
            }
            if (is_null($var['href']) ) {
                $var['href'] = $data->getHref();
            }
            if (is_null($var['title']) ) {
                $var['title'] = $data->getTitle();
            }
            if (is_null($var['target']) ) {
                $var['target'] = $data->getTarget();
            }
        }

        $request = DB::getInstance()->prepare("UPDATE prefix_link
                    SET href = :href, title = :title, target = :tgt , name = :name
                    WHERE id = :id
                    ");
        $request->bindValue(":id",$id);
        $request->bindValue(":href",mb_strtolower($var['href']));
        $request->bindValue(":title",mb_strtolower($var['title']));
        $request->bindValue(":tgt",mb_strtolower($var['target']));
        $request->bindValue(":name",mb_strtolower($var['name']));

        return $request->execute();
    }

    /**
     * insert  in DB
     * @param array $data
     * @return bool
     */
    public static function add(array $data) : bool {
        $request = DB::getInstance()->prepare("INSERT INTO prefix_link
        (href, title, target, name)
        VALUES (:href, :title, :target, :name)
        ");
        if (!isset($data['href']) || !isset($data['title'])){
            return false;
        }
        if (!isset($data['name'])){
            $data['name'] = $data['title'];
        }
        if (!isset($data['target'])){
            $data['target'] = '_blank';
        }
        $request->bindValue(":href",mb_strtolower($data['href']));
        $request->bindValue(":title",mb_strtolower($data['title']));
        $request->bindValue(":target",mb_strtolower($data['target']));
        $request->bindValue(":name",mb_strtolower($data['name']));

        return $request->execute();
    }

    /**
     * delete  by id
     * @param int $id
     * @return bool
     */
    public static function delete(int $id) : bool {
        $request = DB::getInstance()->prepare("DELETE FROM prefix_link WHERE id = :id");
        $request->bindValue(':id',$id);
        return $request->execute();
    }

    /**
     * private request for the getBy
     * @param PDOStatement $request
     * @return Link|null
     */
    private static function getOne(PDOStatement $request ) : ?Link {
        $request->execute();
        $data = $request->fetch();
        if ($data) {
            return new Link($data['id'], $data['href'], $data['title'], $data['target'], $data['name']);
        }
        return null;
    }

    /**
     * private request for the getAll
     * @param PDOStatement $request
     * @return array
     */
    private static function getMany(PDOStatement $request) : array {
        $array = [];
        $result = $request->execute();
        if ($result){
            $datum = $request->fetchAll();
            if ($datum) {
                foreach ($datum as $data) {
                    $item = new Link($data['id'], $data['href'], $data['title'], $data['target'], $data['name']);
                    $array[] = $item;
                }
            }
        }
        return $array;

    }

}