<?php

namespace spec\Domain\Restaurant;

use Domain\Restaurant\Restaurant;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RestaurantSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithNameAndAddress('PizzaHut', 'Barking, IG11');
    }

    function it_exposes_restaurant_name()
    {
        $this->getName()->shouldReturn('PizzaHut');
    }

    function it_exposes_restaurant_address()
    {
        $this->getAddress()->shouldReturn('Barking, IG11');
    }
}
