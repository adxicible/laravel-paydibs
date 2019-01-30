<?php

namespace Paydibs;

class Customer {
    
    public $ipAddress;

    public $name;

    public $email;

    public $phone;

    public function getData() {
        return [
            'CustIP' => $this->ipAddress,
            'CustName' => $this->name,
            'CustEmail' => $this->email,
            'CustPhone' => $this->phone
        ];
    }
}