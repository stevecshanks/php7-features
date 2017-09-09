<?php

namespace SteveShanks\PHP7Features;

use SteveShanks\PHP7Features\Expectations;

class ExpectationsTest extends \PHPUnit\Framework\TestCase
{
    public function testItOnlyAcceptsPositiveIntegers()
    {
        $this->expectException(\AssertionError::class);
        $fixture = new Expectations();
        $fixture->add(-1);
    }

    public function testItThrowsCustomException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $fixture = new Expectations();
        $fixture->subtract(-1);
    }
}
