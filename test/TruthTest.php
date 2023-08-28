<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class TruthTest extends TestCase
{
    public function testTrue():void
    {
        self::assertTrue(true);
        self::assertNotTrue(false);
    }

    public function testFalse():void
    {
        self::assertFalse(false);
        self::assertNotFalse(true);
    }
}
