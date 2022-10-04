<?php
require_once __DIR__ . "/library.php";
require_once __DIR__ . "/model.php";

$url = isset($_SERVER["PATH_INFO"]) ? explode("/", ltrim($_SERVER["PATH_INFO"], "/")) : "/";
$index = new library();

if($url[0] = "/") {
    return $index->index();
}
?>