<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class TeardownTest extends TestCase
{
    private static int $counter = 3;
    protected function tearDown(): void
    {
        self::$counter -=1;
    }

    public function testOne():void
    {
        self::assertSame(3,self::$counter);
    }

    /**
     * @test
     */
    public function two():void
    {
        self::assertSame(2,self::$counter);
    }
}
