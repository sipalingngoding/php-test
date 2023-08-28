<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class TeardownBeforeClass extends TestCase
{
    private static int $counter = 1;
    public static function tearDownAfterClass(): void
    {
        self::$counter += 2;
    }

    public function testOne():void
    {
        self::assertSame(1,self::$counter);
    }

    public function testTwo():void
    {
        self::assertSame(1,self::$counter);
        self::assertSame(1,self::$counter);
    }
}
