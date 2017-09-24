<?php

namespace SteveShanks\PHP7Features\Tests;

use PHPUnit\Framework\TestCase;
use SteveShanks\PHP7Features\GeneratorReturnExpression;

class GeneratorReturnExpressionTest extends TestCase
{
    public function testItReturnsCorrectValues()
    {
        $fixture = new GeneratorReturnExpression(0, 5);
        $results = [];
        foreach ($fixture->getValueIterator() as $value) {
            $results[] = $value;
        }
        $this->assertSame([0, 1, 2, 3, 4], $results);
    }

    public function testItReturnsCorrectTotal()
    {
        $fixture = new GeneratorReturnExpression(0, 5);
        $iterator = $fixture->getValueIterator();
        while ($iterator->valid()) {
            $iterator->next();
        }
        $this->assertSame(10, $fixture->getTotal());
    }
}
