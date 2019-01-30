<?php

namespace Paydibs;

class CreditCard {

    //Card holder's name
    public $holderName;

    //Credit card number
    public $number;

    //Credit card expiry date
    public $expiryDate;

    //Credit card's verification value
    public $cvc;

    public function getData()
    {
        return [
            'CardHolder' => $this->holderName,
            'CardNo' => $this->number,
            'CardExp' => $this->expiryDate,
            'CardCVV2' => $this->cvc
        ];
    }
}