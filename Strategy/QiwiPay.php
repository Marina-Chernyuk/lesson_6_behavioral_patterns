<?php

use IPayment;

class QiwiPay implements IPayment
{
    public function requestPay(float $sum, string $phone): void
    {
        // отправка запроса для для Qiwi
    }

    public function responsePay(): string
    {
        return 'The answer came... from Qiwi'
    }
}
