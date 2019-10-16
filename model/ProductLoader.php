<?php
declare(strict_types=1);

class ProductLoader
{
    public function loadProduct(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('data/products.json'),true);
        foreach ($json AS $productJson){
            $list[] = new Product($productJson['id'],$productJson['name'],$productJson['description'],$productJson['price']);

        }
        return $list;
    }
}