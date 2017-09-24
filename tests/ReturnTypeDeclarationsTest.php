<?php

namespace SteveShanks\PHP7Features\Tests;

use PHPUnit\Framework\TestCase;
use stdClass;
use SteveShanks\PHP7Features\ReturnTypeDeclarations;
use TypeError;

class ReturnTypeDeclarationsTest extends TestCase
{
    /**
     * @dataProvider incorrectTypeProvider
     */
    public function testItThrowsExceptionIfIncorrectTypeReturned($method, $input)
    {
        $this->expectException(TypeError::class);
        $fixture = new ReturnTypeDeclarations();
        $fixture->{$method}($input);
    }

    public function incorrectTypeProvider()
    {
        return [
            ['returnInt', 'string'],
            ['returnObject', new stdClass()],
            ['returnObject', null]
        ];
    }

    /**
     * @dataProvider correctTypeProvider
     */
    public function testItReturnsCorrectlyIfCorrectTypeReturned($method, $input)
    {
        $fixture = new ReturnTypeDeclarations();
        $this->assertSame($input, $fixture->{$method}($input));
    }

    public function correctTypeProvider()
    {
        return [
            ['returnInt', 1],
            ['returnObject', new ReturnTypeDeclarations()]
        ];
    }

    public function testItDoesNotCoerceReturnTypeIfStrictModeEnabled()
    {
        $this->expectException(TypeError::class);
        $fixture = new ReturnTypeDeclarations();
        $fixture->returnInt(1.5);
    }
}
