<?php

return [
    'url' => env('APP_ENV') == 'production' ? 'https://payment.paydibs.com/PPG/PymtCheckout.aspx' : 'https://dev.paydibs.com/PPGSG/PymtCheckout.aspx',

    'merchant_id' => env('PAYDIBS_MERCHANT_ID'),
    
    'merchant_password' => env('PAYDIBS_MERCHANT_PASSWORD'),

    'currency_code' => 'MYR',

    'callback_url' => env('APP_URL') . '/paydibs/check',

    'return_url' => env('APP_URL') . '/paydibs/callback'
];