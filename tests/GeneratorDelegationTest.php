<?php

namespace SteveShanks\PHP7Features\Tests;

use SteveShanks\PHP7Features\GeneratorDelegation;

class GeneratorDelegationTest extends \PHPUnit\Framework\TestCase
{
    public function testItReturnsCorrectSequence()
    {
        $fixture = new GeneratorDelegation();
        $iterator = $fixture->getFibonacciIterator();
        $results = [];
        for ($i = 0; $i < 10; $i++) {
            $results[] = $iterator->current();
            $iterator->next();
        }
        $this->assertSame([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $results);
    }
}
