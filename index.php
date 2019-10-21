<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'controller/HomeController.php';
require 'model/Customer.php';
require 'model/CustomerLoader.php';
require 'model/Product.php';
require 'model/ProductLoader.php';

if(!isset($_GET['customer'])) {
    $_GET['customer'] = 0;
}
if(!isset($_GET['product'])){
    $_GET['product']=0;
}

$controller = new HomeController();
$controller->render((int)$_GET['customer'],(int)$_GET['product']);


//$productController = new HomeController();
//$productController->render((int)$_GET['product']);
?>
