<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;

class DependenciesTest extends TestCase
{
    public static int $counter = 1;

    #[Depends('testOne')]
    public function testTwo():void
    {
        self::assertSame(2,self::$counter);
    }

    public function testOne():void
    {
        self::assertSame(1,self::$counter);
        self::$counter += 1 ;
    }
}
