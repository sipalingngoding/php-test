<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class IncompleteTest extends TestCase
{
    public function testSomething():void
    {
        $arr = [1,3,4];
        self::assertIsArray($arr);
        self::markTestIncomplete('Test belum selesai');
    }
}
