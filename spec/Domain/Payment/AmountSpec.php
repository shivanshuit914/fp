<?php

namespace spec\Domain\Payment;

use Domain\Payment\Amount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AmountSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithAmountAndCurrency('13.30', 'GBP');
    }

    function it_exposes_amount()
    {
        $this->getAmount()->shouldReturn('13.30');
    }

    function it_exposes_currency()
    {
        $this->getCurrency()->shouldReturn('GBP');
    }
}
