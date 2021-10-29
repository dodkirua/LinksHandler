<?php

namespace Dodkirua\LinksHandler\Model\Manager;

use Dodkirua\LinksHandler\Model\DB;
use Dodkirua\LinksHandler\Model\Entity\User;
use PDOStatement;

class UserManager extends Manager{

    /**
     * return a User by id
     * @param int $id
     * @return User|null
     */
    public static function getById (int $id) : ?User{
        $request = DB::getInstance()->prepare("SELECT * FROM prefix_user where id= :id");
        $request->bindValue(":id",$id);
        return self::getOne($request);
    }

    /**
     * return a User by id
     * @param string $mail
     * @return User|null
     */
    public static function getByMail (string $mail) : ?User{
        $request = DB::getInstance()->prepare("SELECT * FROM prefix_user where mail= :mail");
        $request->bindValue(":mail",mb_strtolower($mail));
        return self::getOne($request);
    }

    /**
     * return an array with all the User
     * @return array
     */
    public static function getAll() : array {
        $request = DB::getInstance()->prepare("SELECT * FROM prefix_user");
        return self::getMany($request);
    }

    /**
     * update on DB with id
     * @param int $id
     * @param array|null $var
     * @return bool
     */
    public static function update(int $id, array $var = null) : bool{
        if (is_null($var['name']) || is_null($var['surname']) || is_null($var['mail']) || is_null($var['pass']) ) {
            $data = self::getById($id);
            if (is_null($var['name'])) {
                $var['name'] = $data->getName();
            }
            if (is_null($var['href']) ) {
                $var['surname'] = $data->getSurname();
            }
            if (is_null($var['title']) ) {
                $var['mail'] = $data->getMail();
            }
            if (is_null($var['target']) ) {
                $var['pass'] = $data->getPass();
            }
        }

        $request = DB::getInstance()->prepare("UPDATE prefix_user
                    SET surname = :sn, mail = :mail, pass = :pwd , name = :name
                    WHERE id = :id
                    ");
        $request->bindValue(":id",$id);
        $request->bindValue(":name",mb_strtolower($var['name']));
        $request->bindValue(":sn",mb_strtolower($var['surname']));
        $request->bindValue(":tgt",mb_strtolower($var['target']));
        $request->bindValue(":pwd",$var['pass']);

        return $request->execute();
    }

    /**
     * insert  in DB
     * @param string $name
     * @param string $surname
     * @param string $mail
     * @param string $pass
     * @return bool
     */
    public static function add(string $name, string $surname, string $mail, string $pass) : bool {
        $request = DB::getInstance()->prepare("INSERT INTO prefix_user
        (name, surname, mail, pass)
        VALUES (:name, :sn, :mail, :pass)
        ");
        $request->bindValue(":name",mb_strtolower($name));
        $request->bindValue(":sn",mb_strtolower($surname));
        $request->bindValue(":mail",mb_strtolower($mail));
        $request->bindValue(":pass",$pass);

        return $request->execute();
    }

    /**
     * delete  by id
     * @param int $id
     * @return bool
     */
    public static function delete(int $id) : bool {
        $request = DB::getInstance()->prepare("DELETE FROM prefix_user WHERE id = :id");
        $request->bindValue(':id',$id);
        return $request->execute();
    }

    /**
     * private request for the getBy
     * @param PDOStatement $request
     * @return User|null
     */
    private static function getOne(PDOStatement $request ) : ?User {
        $request->execute();
        $data = $request->fetch();
        if ($data) {
            return new User($data['id'], $data['name'], $data['surname'], $data['mail'], $data['pass']);
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
                    $item = new User($data['id'], $data['name'], $data['surname'], $data['mail'], $data['pass']);
                    $array[] = $item;
                }
            }
        }
        return $array;

    }

}