<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class SetupBeforeClass extends TestCase
{
    private static int $counter = 1 ;
    public static function setUpBeforeClass(): void
    {
        self::$counter += 1;
    }

    /** @test
     *
     */
    public function one():void
    {
        self::assertSame(2,self::$counter);
    }

    /** @test
     *
     */
    public function two():void
    {
        self::assertSame(2,self::$counter);
    }
}
