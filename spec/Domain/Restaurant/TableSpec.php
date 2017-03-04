<?php

namespace spec\Domain\Restaurant;

use Domain\Restaurant\Table;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TableSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithNumber(34);
    }

    function it_exposes_number()
    {
        $this->getNumber()->shouldReturn(34);
    }
}
