<?php

namespace SteveShanks\PHP7Features\Tests;

use SteveShanks\PHP7Features\SpaceshipOperator;

class SpaceshipOperatorTest extends \PHPUnit\Framework\TestCase
{
    public function testItSortsArrayCorrectly()
    {
        $input = [5, 6, 1, 3, 5, 8];
        $fixture = new SpaceshipOperator();
        $this->assertSame([1, 3, 5, 5, 6, 8], $fixture->sort($input));
    }
}
