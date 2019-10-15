<?php
declare(strict_types=1);

class CustomerLoader
{
    public function loadeById(int $customerId): Customer
    {
        $json = json_decode(file_get_contents('../jsonfiles/customers.json'), true);
        foreach ($json AS $customerJson) {
            if ($customerJson['id'] === $customerId) {
                return new Customer($customerJson['id'], $customerJson['name'], new Group);
            }
        }
    }

    public function loadCustomers(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('../jsonfiles/customers.json'), true);
        foreach ($json AS $customerJson) {
            $list[] = new Customer($customerJson['id'], $customerJson['name'], new Group);
        }
    }


}