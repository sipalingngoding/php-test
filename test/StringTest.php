<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testString():void
    {
        $str = "diory";
        self::assertIsString($str);
        self::assertSame('diory',$str);
        self::assertEquals('diory',$str);
    }

    public function testString1():void
    {
        $str = 'You break my 10 heart';
        self::assertStringStartsWith('You',$str);
        self::assertStringEndsWith('heart',$str);
        self::assertStringContainsString('my',$str);
        self::assertStringNotContainsString('babi',$str);
        self::assertMatchesRegularExpression('/BreAk/i',$str);
        self::assertMatchesRegularExpression('/\d/',$str);
        self::assertMatchesRegularExpression('/[A-Z]/',$str);
    }
}
