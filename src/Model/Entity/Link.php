<?php

namespace Dodkirua\LinksHandler\Model\Entity;

use Dodkirua\LinksHandler\Model\Entity\Interfaces\EntityInterface;

class Link extends Entity implements EntityInterface {
    private string $href;
    private string $title;
    private string $target;
    private string $name;

    public function __construct(int $id = null, string $href = null, string $title = null,
                                string $target = null, string $name = null)    {
        parent::__construct($id);
        $this->setHref($href)
            ->setTitle($title)
            ->setTarget($target)
            ->setName($name);
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
     * @param string $href
     * @return Link
     */
    public function setHref(string $href): Link
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
     * @param string $title
     * @return Link
     */
    public function setTitle(string $title): Link
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
     * @param string $target
     * @return Link
     */
    public function setTarget(string $target): Link
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
     * @param string $name
     * @return Link
     */
    public function setName(string $name): Link
    {
        $this->name = $name;
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
        return $array;
    }
}