<?php

namespace spec\Domain\Payment\Report;

use Domain\Payment\Report\ReportProvider;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReportProviderSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithStartDateEndDate(new \DateTimeImmutable(), new \DateTimeImmutable());
    }
}
