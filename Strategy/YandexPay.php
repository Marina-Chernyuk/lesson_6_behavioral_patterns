<?php

use IPayment;

class YandexPay implements IPayment
{
    
    public function requestPay(float $sum, string $phone): void
    {
        // отправка запроса для Yandex
    }

    public function responsePay(): string
    {
        return 'The answer came... from Yandex'
    }
}
