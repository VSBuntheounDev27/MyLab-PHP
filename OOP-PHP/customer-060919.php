<?php
    class Customer{
        public $id, $name, $phone, $email, $address;
    }

    $c = new Customer();
    $c->id = '100';
    $c->name = 'Dara';
    $c->phone = '012012012';

    echo $c->id.' '.$c->name.' '.$c->phone;

?>