<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testArray():void
    {
        $arr = ['Diory','Pribadi'];
        self::assertSame(['Diory','Pribadi'],$arr);
        self::assertIsArray($arr);
        self::assertNotEmpty($arr);
        self::assertCount(2,$arr);
        self::assertSameSize(['a','b'],$arr);
        self::assertContains('Diory',$arr);
        self::assertNotContains('Sinaga',$arr);
        self::assertContainsOnly('string',$arr);
    }

    public function testArray1():void
    {
        $person = ['name'=>'Diory','address'=>'Bandung'];
        self::assertIsArray($person);
        self::assertCount(2,$person);
        self::assertContainsOnly('string',$person);
        self::assertArrayHasKey('name',$person);
        self::assertArrayHasKey('address',$person);
    }
}
