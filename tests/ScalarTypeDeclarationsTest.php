<?php

declare(strict_types=1);

namespace SteveShanks\PHP7Features\Tests;

use PHPUnit\Framework\TestCase;
use SteveShanks\PHP7Features\ScalarTypeDeclarations;
use TypeError;

class ScalarTypeDeclarationsTest extends TestCase
{
    public function testItThrowsExceptionOnIncorrectTypes()
    {
        $this->expectException(TypeError::class);
        $fixture = new ScalarTypeDeclarations();
        $fixture->test(1, 'string');
    }

    public function testItReturnsCorrectlyWithCorrectTypes()
    {
        $fixture = new ScalarTypeDeclarations();
        $this->assertSame("one 2", $fixture->test("one", 2));
    }

    public function testItDoesNotCoerceTypesIfStrictModeEnabled()
    {
        $this->expectException(TypeError::class);
        $fixture = new ScalarTypeDeclarations();
        $fixture->test('one', 1.5);
    }
}
