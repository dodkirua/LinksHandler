<?php


use Dodkirua\LinksHandler\Model\Entity\Link;
use Dodkirua\LinksHandler\Model\Manager\LinkManager;

$data = LinkManager::getAll();

$response = [];

/* @var Link $link*/
foreach ($data as $link) {
    $array['href'] = $link->getHref();
    $array['title'] = $link->getTitle();
    $array['target'] = $link->getTarget();
    $array['name'] = $link->getName();
    $response[] = $array;
}

echo json_encode($response);

exit;