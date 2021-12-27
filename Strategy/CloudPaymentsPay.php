<?php

use IPayment;

class CloudPaymentsPay implements IPayment
{
    public function requestPay(float $sum, string $phone): void
    {
        // отправка запроса для CloudPayments
    }

    public function responsePay(): string
    {
        return 'The answer came... from CloudPayments'
    }
}
