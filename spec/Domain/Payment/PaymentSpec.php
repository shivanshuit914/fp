<?php

namespace spec\Domain\Payment;

use Domain\Card\Card;
use Domain\Payment\Amount;
use Domain\Payment\Payment;
use Domain\Restaurant\Restaurant;
use Domain\Restaurant\Table;
use PhpSpec\ObjectBehavior;

class PaymentSpec extends ObjectBehavior
{
    function let(Amount $amount, Table $table, Restaurant $restaurant, Card $card)
    {
        $this->beConstructedWithDetails($amount, $table, $restaurant, $card, 'REF23423423');
    }

    function it_may_have_tip(Amount $amount)
    {
        $this->hasTipOf($amount);
    }

    function it_may_expose_tip()
    {
        $amount = Amount::withAmountAndCurrency('1.20', 'GBP');
        $this->hasTipOf($amount);
        $this->getTip()->shouldBeAnInstanceOf(Amount::class);
    }

    function it_exposes_reference_number()
    {
        $this->getReferenceNumber()->shouldReturn('REF23423423');
    }

}
