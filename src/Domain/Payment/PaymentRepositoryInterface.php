<?php

namespace Domain\Payment;


interface PaymentRepositoryInterface
{
    public function save(Payment $payment);
}