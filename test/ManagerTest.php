<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class ManagerTest extends TestCase
{
    public function testManager():void
    {
        $manager = new Manager('Diory','Jakarta',false);
        self::assertIsObject($manager);
        self::assertObjectHasProperty('username',$manager);
        self::assertObjectHasProperty('address',$manager);
        self::assertObjectHasProperty('status',$manager);
        self::assertInstanceOf(Manager::class,$manager);
        self::assertInstanceOf(Person::class,$manager);

        //Instance of only
        self::assertContainsOnlyInstancesOf(Manager::class,[$manager, new Manager('Rudi','Ambon')]);
    }
}
