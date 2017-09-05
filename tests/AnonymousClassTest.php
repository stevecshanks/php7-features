<?php

namespace SteveShanks\PHP7Features\Tests;

use SteveShanks\PHP7Features\AnonymousClass;

class AnonymousClassTest extends \PHPUnit\Framework\TestCase
{
    public function testItCanCreateInvokableObject()
    {
        $input = [1, 2, 3];
        $fixture = new AnonymousClass();

        $output = array_map($fixture->getMultiplier(10), $input);

        $this->assertSame([10, 20, 30], $output);
    }
}
