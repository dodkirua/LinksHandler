<?php

namespace Dodkirua\LinksHandler\Model\Entity;



use Dodkirua\LinksHandler\Model\Entity\Interfaces\EntityInterface;

class Link extends Entity implements EntityInterface {
    private ?string $href;
    private ?string $title;
    private ?string $target;
    private ?string $name;
    private ?User $user;



    public function __construct(int $id = null, string $href = null, string $title = null,
                                string $target = null, string $name = null, User $user = null)    {
        parent::__construct($id);
        $this->setHref($href)
            ->setTitle($title)
            ->setTarget($target)
            ->setName($name)
            ->$this->setUser($user);
    }

    /**
     * get the Href
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * set the Href
     * @param string|null $href
     * @return Link
     */
    public function setHref(?string $href): Link
    {
        $this->href = $href;
        return $this;
    }

    /**
     * get the Title
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * set the Title
     * @param string|null $title
     * @return Link
     */
    public function setTitle(?string $title): Link
    {
        $this->title = $title;
        return $this;
    }

    /**
     * get the Target
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * set the Target
     * @param string|null $target
     * @return Link
     */
    public function setTarget(?string $target): Link
    {
        $this->target = $target;
        return $this;
    }

    /**
     * get the Name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * set the Name
     * @param string|null $name
     * @return Link
     */
    public function setName(?string $name): Link
    {
        $this->name = $name;
        return $this;
    }

    /**
     * get user
     * @return User|null
     */
    public function getUser(): ?User    {
        return $this->user;
    }

    /**
     * set User
     * @param User|null $user
     * @return Link
     */
    public function setUser(?User $user): Link    {
        $this->user = $user;
        return $this;
    }

    /**
     * return all data in array
     * @return array
     */
    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['href'] = $this->getHref();
        $array['title'] = $this->getTitle();
        $array['target'] = $this->getTarget();
        $array['name'] = $this->getName();
        $array['user'] = $this->getUser()->getAllData();
        return $array;
    }
}