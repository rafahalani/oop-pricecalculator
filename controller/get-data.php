<?php
$customer = $_GET(file_get_contents("customer.json"));
$customer = json_decode($customer, true);
foreach($customer as $name){
    echo '<tr><td>' . $name["name"]. '</td>';
}
