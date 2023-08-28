<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAdd():void
    {
        $math = new Math();
        self::assertIsObject($math);
        self::assertSame(12,$math->add(2,10));
    }

    public function testMultiply():void
    {
        $math = new Math();
        self::assertSame(36,$math->multiply(12,3));
    }

    public function testDivide():void
    {
        $math = new Math();
        self::assertSame(0.5,$math->divide(11,22));
        self::assertLessThan(1,$math->divide(11,22));
    }

    //For data provider
    public static function additionProvider():array
    {
        return [
            [1,1,2],
            [1,2,3],
            [11,2,13],
            [11,12,23],
            [10,22,32],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAddWithAdditionProvider($a,$b,$expected):void
    {
        $math = new Math();
        self::assertSame($expected,$math->add($a,$b));
    }

    #[DataProviderExternal(ExternalProvider::class,'additionProviderMultiply')]
    public function testMultiplyWithAdditionProvider($a,$b,$expected):void
    {
        $math = new Math();
        self::assertSame($expected,$math->multiply($a,$b));
    }
}

class ExternalProvider
{
    public static function additionProviderMultiply():array
    {
        return [
            [1,1,1],
            [1,2,2],
            [2,3,6],
            [3,3,9],
        ];
    }
}
