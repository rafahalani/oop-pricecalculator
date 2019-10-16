<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'controller/HomeController.php';
require 'model/Customer.php';
require 'model/CustomerLoader.php';
if(!isset($_GET['customerId'])) {

    $_GET['customerId'] = 5;
}

$controller = new HomeController();
$controller->render((int)$_GET['customerId']);
?>

<!--
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Price Calculator</h2>
  <p>IN the next dropdown you can find your name:</p>
    <form>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Names
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation">NAME</li>
    </ul>
  </div>
    </form>
</div>
<div class="container">

    <p>IN the next dropdown you can find a product name:</p>
    <form>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Products
            <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <li role="presentation">PRODUCT</li>
        </ul>
    </div>
    </form>
</div>

</body>
</html>-->

