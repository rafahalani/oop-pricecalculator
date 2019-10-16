<?php
declare(strict_types=1);

class CustomerLoader    //create domain objects which is very important //it is the database
{
    public function loadCustomers(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('data/customers.json'), true);
        foreach ($json AS $customerJson) {
            $list[] = new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);

        }
        return $list;

    }

    public function loadById(int $customerId):? Customer
    {
        $json = json_decode(file_get_contents('data/customers.json'), true);
        foreach ($json AS $customerJson) {// loop over json file array, make object from customer in array.
            if ($customerJson['id'] === $customerId) {// compare the give id , with the id in customer array
                // return an object from give ID, based on Customer class
               return new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
            }
        }
        return null;
    }

}

/*

class CustomerLoader
{
    public function loadeById(int $customerId): Customer
    {
        $json = json_decode(file_get_contents('../jsonfiles/customers.json'), true);
        foreach ($json AS $customerJson) { // loop over json file array, make object from customer in array.
            if ($customerJson['id'] === $customerId) { // compare the give id , with the id in customer array
            // return an object from give ID, based on Customer class
                return new Customer($customerJson['id'], $customerJson['name'], new Group); // properties are predetermined in caas Customer
                // the property GROUP, is also an object

            }
        }
    }

    public function loadCustomers(): array//function/method to load all the json file
    {
        $list = [];
        $json = json_decode(file_get_contents('../jsonfiles/customers.json'), true);
        foreach ($json AS $customerJson) {
            //create object for every json save it in list
            $list[] = new Customer($customerJson['id'], $customerJson['name'], new Group);
        }
    }


}*/