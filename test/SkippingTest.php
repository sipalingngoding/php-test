<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class SkippingTest extends TestCase
{
    public function testSomething():void
    {
        self::markTestSkipped('Skip test');
        self::assertSame('name','name');
    }
}
