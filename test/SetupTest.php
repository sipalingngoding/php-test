<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class SetupTest extends TestCase
{
    private Math $math;
    private static int $counter = 0;
    protected function setUp(): void
    {
        $this->math =new Math();
        self::$counter += 1;
    }

    public function testOne():void
    {
        self::assertSame(2,$this->math->add(1,1));
        self::assertSame(1,self::$counter);
    }

    public function testTwo():void
    {
        self::assertSame(3,$this->math->multiply(1,3));
        self::assertSame(2,self::$counter);
    }
}
