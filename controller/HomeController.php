<?php
declare(strict_types=1);
class HomeController //to connect all the files (model and view)
{
    public function render (int $customerId){
        $loader= new CustomerLoader();// when you call a method here you are connecting that class(ProductLoader) to (HomeController)
        $customer = $loader->loadById($customerId);
        $allCustomers = $loader->loadCustomers();

        require 'view/home.php';
    }
    public function productRender (int $productId) {
        $loaderP = new ProductLoader();
        $product = $loaderP->loadById($productId);
        $allProducts = $loaderP->loadProduct();
        require 'view/home.php';
    }

}