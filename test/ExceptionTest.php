<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testNoException():void
    {
        $person = new Person('Diory','Pekanbaru');
        self::expectOutputString('Hello Rizky saya Diory');
        $person->sayHello('Rizky');
    }
    public function testException():void
    {
        $person = new Person('Budiman','Jakarta');
        self::expectException(\Exception::class);
        self::expectExceptionMessage('Name tidak boleh null');
        $person->sayHello(null);
    }
}
