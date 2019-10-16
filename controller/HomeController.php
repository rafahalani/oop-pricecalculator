<?php

declare(strict_types=1);
class HomeController //to connect all the files (model and view)
{
public function render (int $customerId){

    $loader= new CustomerLoader();// when you call a method here you are connecting that class(CustomerLoader) to (HomeController)
    $customer = $loader->loadById($customerId);
    $allCustomers = $loader->loadCustomers();

require 'view/home.php';
    }
}