<?php

namespace Paydibs;

class Merchant {
    
    public $id;

    public $name;

    public $password;

    public $paymentId;

    public $orderId;

    public $orderDescription;

    public $transactionAmount;

    public $currencyCode;

    public $returnURL;

    public $callbackURL;
    
    public function __construct()
    {
        $this->id = config('paydibs.merchant_id'); 
        
        $this->password = config('paydibs.merchant_password');
        
        $this->callbackURL = config('paydibs.callback_url');

        $this->returnURL = config('paydibs.return_url');
        
        $this->currencyCode = config('paydibs.currency_code');

        $this->name = env('APP_NAME');
    }

    public function getData()
    {
        return [
            'MerchantID' => $this->id,
            'MerchantPymtID' => $this->paymentId,
            'MerchantOrdID' => $this->orderId,
            'MerchantOrdDesc' => $this->orderDescription,
            'MerchantTxnAmt' => $this->transactionAmount,
            'MerchantCurrCode' => $this->currencyCode,
            'MerchantRURL' => $this->returnURL,
            'MerchantCallbackURL' => $this->callbackURL
        ];
    }
}