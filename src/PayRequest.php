<?php

namespace Paydibs;

class PayRequest 
{
    public $url;

    public $transactionType = "PAY";

    public $merchant;

    public $customer;

    public $method  = "CC";

    public $card;

    public $pageTimeout = 300;

    public function __construct(Merchant $merchant, Customer $customer,
        CreditCard $card)
    {
        $this->url = config('paydibs.url');

        $this->merchant = $merchant;
        
        $this->customer = $customer;

        $this->card = $card;
    }

    public function getSign()
    {
        return hash('sha512', 
            $this->merchant->password .
            $this->transactionType .
            $this->merchant->id .
            $this->merchant->paymentId .
            $this->merchant->orderId .
            $this->merchant->returnURL .
            $this->merchant->transactionAmount .
            $this->merchant->currencyCode .
            $this->customer->ipAddress .
            $this->pageTimeout .
            $this->merchant->callbackURL .
            $this->card->number
        );
    }

    public function getData() {
        return array_merge(
            [ 
                'Method' => $this->method,
                'TxnType' => $this->transactionType,
                'Sign' => $this->getSign(),
                'PageTimeout' => $this->pageTimeout,
            ],
            $this->merchant->getData(),
            $this->customer->getData(),
            $this->card->getData()
        );
    }
}