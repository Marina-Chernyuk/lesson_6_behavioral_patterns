<?php

use Pay;
use CloudPaymentsPay;
use QiwiPay;
use YandexPay;
use WebmoneyPay;

$sum = 3500;
$phone = '89648186055';

$pay = new Pay();

$payCloudPayments = $pay->pay(new CloudPaymentsPay(), $sum, $phone);
echo $payCloudPayments;

$payQiwi = $pay->pay(new QiwiPay(), $sum, $phone);
echo $payQiwi;

$payYandex = $pay->pay(new YandexPay(), $sum, $phone);
echo $payYandex;

$payWebMoney = $pay->pay(new WebmoneyPay(), $sum, $phone);
echo $payWebMoney;


