<?php

namespace Paydibs;

class PaydibsTest extends \Illuminate\Foundation\Testing\TestCase
{
    public function testPay() 
    {

        $merchant = new Merchant();

        $merchant->paymentId = "Test000127";

        $merchant->orderId = "Order 5";

        $merchant->orderDescription = "Payment test";

        $merchant->transactionAmount = 20.01;

        $customer = new Customer();

        $customer->ipAddress = "127.0.0.1";

        $customer->name = "Test Customer";

        $customer->email = "test@mail.com";

        $customer->phone = "123123123";

        $card = new CreditCard();

        $card->holderName = $customer->name;

        $card->number = '4111111111111111';

        $card->expiryDate = '2023/01';

        $card->cvc = '123';

        $request = new PayRequest($merchant, $customer, $card);
        
        $pd = new Paydibs();

        $response = $pd->pay($request);

        $this->assertNotNull($response);
    }

    public function testFailPay()
    {
        $merchant = new Merchant();

        $merchant->paymentId = "Test000129";

        $merchant->orderId = "Order 5";

        $merchant->orderDescription = "Payment test";

        $merchant->transactionAmount = 20.01;

        $customer = new Customer();

        $customer->ipAddress = "120.0.0.1";

        $customer->name = "Test Customer";

        $customer->email = "test@mail.com";

        $customer->phone = "123123123";

        $card = new CreditCard();

        $card->holderName = $customer->name;

        $card->number = '4111111111111194';

        $card->expiryDate = '2023/01';

        $card->cvc = '123';

        $request = new PayRequest($merchant, $customer, $card);
        
        $pd = new Paydibs();

        $response = $pd->pay($request);
        
        $this->assertNotNull($response);
    }
}