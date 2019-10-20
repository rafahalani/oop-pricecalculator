<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'controller/HomeController.php';
require 'model/Customer.php';
require 'model/CustomerLoader.php';
if(!isset($_GET['customerId'])) {
    $_GET['customerId'] = 0;
}

$controller = new HomeController();

    $controller->render((int)$_GET['customerId']);

?>
