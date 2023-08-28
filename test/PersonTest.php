<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testPerson(){
        $person = new Person('Diory','Bandung');
        self::assertObjectHasProperty('username',$person);
        self::assertObjectHasProperty('address',$person);
        self::assertIsObject($person);

        //Instance only
        self::assertContainsOnlyInstancesOf(Person::class,[$person,new Manager('Rendi','Bandung')]);
    }
}
