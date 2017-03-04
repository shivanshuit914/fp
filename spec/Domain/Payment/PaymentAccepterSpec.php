<?php

namespace spec\Domain\Payment;

use Domain\Payment\PaymentAccepter;
use Domain\Payment\PaymentRepositoryInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PaymentAccepterSpec extends ObjectBehavior
{
    function let(PaymentRepositoryInterface $paymentRepository)
    {
        $this->beConstructedWith($paymentRepository);
    }

    function it_returns_errors_when_there_is_no_reference_number()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->duringApply(['ref_number' => '']);
    }

    function it_returns_reference_number_on_succssfull_apply()
    {
        $details  = ['ref_number' => 'REF234234', 'total_amount' => '24', 'currency' => 'GBP', 'table_naumber' => 32,
        'restaurant' => ['name' => 'Pizza', 'address' => 'barking'], 'card_type' => 'visa'];
        $this->apply($details)->shouldReturn('REF234234');
    }
}
