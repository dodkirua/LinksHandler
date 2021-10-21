<?php

namespace Dodkirua\LinksHandler\Model\Entity;

class User extends Entity implements Interfaces\EntityInterface{
    private string $name;
    private string $surname;
    private string $mail;
    private string $pass;

    public function __construct(int $id = null, string $name = null, string $surname = null,
                                string $mail = null, string $pass = null){
        parent::__construct($id);
        $this->setName($name)
            ->setSurname($surname)
            ->setMail($mail)
            ->setPass($pass);
    }

    /**
     * get the Name
     * @return string
     */
    public function getName(): string    {
        return $this->name;
    }

    /**
     * set the Name
     * @param string $name
     * @return User
     */
    public function setName(string $name): User    {
        $this->name = $name;
        return $this;
    }

    /**
     * get the Surname
     * @return string
     */
    public function getSurname(): string    {
        return $this->surname;
    }

    /**
     * set the Surname
     * @param string $surname
     * @return User
     */
    public function setSurname(string $surname): User    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * get the Mail
     * @return string
     */
    public function getMail(): string    {
        return $this->mail;
    }

    /**
     * set the Mail
     * @param string $mail
     * @return User
     */
    public function setMail(string $mail): User    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * get the Pass
     * @return string
     */
    public function getPass(): string    {
        return $this->pass;
    }

    /**
     * set the Pass
     * @param string $pass
     * @return User
     */
    public function setPass(string $pass): User    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * get all data in array
     * @return array
     */
    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['name'] = $this->getName();
        $array['surname'] = $this->getSurname();
        $array['mail'] = $this->getMail();
        $array['pass'] = $this->getPass();

        return $array;
    }
}