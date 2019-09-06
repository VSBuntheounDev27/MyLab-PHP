<?php
    class Customer{
        private $id, $name, $phone, $email, $address;
    }

    $c = new Customer();
    $c->id = '100';
    $c->name = 'Dara';
    $c->phone = '012012012';
    $c->email = 'dara@mail.com';

    echo $c->id.' '.$c->name.' '.$c->phone.' '.$c->email;

?>