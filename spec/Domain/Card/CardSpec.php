<?php

namespace spec\Domain\Card;

use Domain\Card\Card;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CardSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithType('Visa');
    }

    function it_exposes_type()
    {
        $this->getType()->shouldReturn('Visa');
    }
}
