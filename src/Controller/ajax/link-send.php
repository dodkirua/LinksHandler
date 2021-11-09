<?php

use Dodkirua\LinksHandler\Model\Manager\LinkManager;
use Dodkirua\LinksHandler\Utility\Security;

$data = file_get_contents('php://input');
$data = json_decode($data, true);

$href = $data['href'];
$title = $data['title'];
$target = $data['target'];
$name = $data['name'];
if (isset($href) && $href !== "") {
    $add['href'] = mb_strtolower(Security::sanitize($href));
}
else {
    exit;
}
if (isset($title) && $title !== "") {
    $add['title'] = mb_strtolower(Security::sanitize($title));
}
else {
    exit;
}
if (isset($target) && $target !== "") {
    $add['target'] = mb_strtolower(Security::sanitize($target));
}
else {
    exit;
}
if (isset($name) && $name !== "") {
    $add['name'] = mb_strtolower(Security::sanitize($name));
}
else {
    exit;
}

LinkManager::add($add);
exit;