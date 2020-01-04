<?php

include './config.php';

if (true === APP_DEBUG)
{
    ini_set('display_errors', 1);
}

include 'database.php';
include 'classes/Controller.php';
include __DIR__ . '/classes/Product.php';

$page = $_GET['page'] ?? 'products';
$action = $_GET['action'] ?? 'index';
//echo $action.PHP_EOL;
$controller = new Controller();

include __DIR__ . '/pages/_header.php';

include $controller->getRoute($page, $action);

include __DIR__ . '/pages/_footer.php';