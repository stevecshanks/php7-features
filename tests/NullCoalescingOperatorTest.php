<?php

namespace SteveShanks\PHP7Features\Tests;

use PHPUnit\Framework\TestCase;
use SteveShanks\PHP7Features\NullCoalescingOperator;

class NullCoalescingOperatorTest extends TestCase
{
    /**
     * @dataProvider expectedOutputProvider
     */
    public function testItReturnsCorrectResult($input, $expectedOutput)
    {
        $fixture = new NullCoalescingOperator();
        $this->assertSame($expectedOutput, $fixture->getThing($input));
    }

    public function expectedOutputProvider()
    {
        return [
            [[], false],
            [['nothing' => null], false],
            [['thing' => null], false],
            [['thing' => 123], 123]
        ];
    }

    /**
     * @dataProvider expectedOutputFromChainProvider
     */
    public function testItReturnsCorrectResultFromChain($inputOne, $inputTwo, $expectedOutput)
    {
        $input = [
            'one' => $inputOne,
            'two' => $inputTwo
        ];
        $fixture = new NullCoalescingOperator();
        $this->assertSame($expectedOutput, $fixture->getFromChain($input));
    }

    public function expectedOutputFromChainProvider()
    {
        return [
            [null, null, false],
            [1, 2, 1],
            [null, 2, 2],
            [1, null, 1]
        ];
    }
}
