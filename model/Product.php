<?php
declare(strict_types=1);

class Product
{
    private $id;
    private $name;
    private $description;
    private $price;

    public function __construct($_id, $_name, $_description, $_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;

    }

    public function getId(){
        $this->id;
    }
    public function getName(){
        $this->name;
    }
    public function getDescription(){
        $this->description;
    }
    public function getPrice(){
        $this->price;
    }
}