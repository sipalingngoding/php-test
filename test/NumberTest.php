<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testNumber():void
    {
        // 2 is same to 1+1
        $actual = 2;
        self::assertIsInt($actual);
        self::assertIsNumeric($actual);
        self::assertSame(1+1,$actual);
        self::assertNotSame("2",$actual);
        self::assertEquals("2",$actual);
    }

    public function testNumber2():void
    {
        $actual = 1;
        self::assertIsInt($actual);
        self::assertGreaterThan(0,$actual);
        self::assertLessThan(10,$actual);
        self::assertGreaterThanOrEqual(1,$actual);
        self::assertLessThanOrEqual(1,$actual);
    }
}
