<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{
    public function testObj():void
    {
        $obj = (object)['username'=>'diory','address'=>'Bandung'];
        self::assertIsObject($obj);
        self::assertObjectHasProperty('username',$obj);
        self::assertObjectHasProperty('address',$obj);
        self::assertEquals((object)['username'=>'diory','address'=>'Bandung'],$obj);
    }
}
