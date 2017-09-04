<?php

declare(strict_types=1);

namespace SteveShanks\PHP7Features\Tests;

use SteveShanks\PHP7Features\ScalarTypeDeclarations;

class ScalarTypeDeclarationsTest extends \PHPUnit\Framework\TestCase
{
    public function testItThrowsExceptionOnIncorrectTypes()
    {
        $this->expectException(\TypeError::class);
        $fixture = new ScalarTypeDeclarations();
        $fixture->test(1, 'string');
    }

    public function testItReturnsCorrectlyWithCorrectTypes()
    {
        $fixture = new ScalarTypeDeclarations();
        $this->assertSame("one 2", $fixture->test("one", 2));
    }

    public function testItDoesNotCooerceTypesIfStrictModeEnabled()
    {
        $this->expectException(\TypeError::class);
        $fixture = new ScalarTypeDeclarations();
        $fixture->test('one', 1.5);
    }
}
