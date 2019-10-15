<?php


declare(strict_types = 1);
class Group
{
}

class Customer//to create value objects has values and methods
{
    private $id;
    private $name;
    private $group;

    function __construct(int $_id, string $_name, Group $_group)
        // function to create objects and pass the parameters
    {
        //pass the parameters to the objects from the class id,name,group
        $this->id = $_id;
        $this->name = $_name;
        $this->group = $_group;
    }

    public function getId(): int // function/method to get the private property: variable in this case id
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGroup() {
    return $this->group;
    }
}
