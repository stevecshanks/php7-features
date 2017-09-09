<?php

namespace SteveShanks\PHP7Features;

use SteveShanks\PHP7Features\ClosureCall;

class ClosureCallTest extends \PHPUnit\Framework\TestCase
{
    public function testItAllowsAccessToPrivateVariables()
    {
        $test1 = new ClosureCall(1);
        $test2 = new ClosureCall(6);

        $closure = function ($multiplier) {
            $this->number = $this->number * $multiplier;
        };

        $closure->call($test1, 10);
        $closure->call($test2, 20);

        $this->assertSame(10, $test1->getNumber());
        $this->assertSame(120, $test2->getNumber());
    }
}
