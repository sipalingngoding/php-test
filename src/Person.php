<?php

namespace SipalingNgoding\Test;

class Person
{
    public string $username;
    public string $address;
    public function __construct(string $username,string $address)
    {
        $this->username = $username;
        $this->address = $address;
    }

    /**
     * @throws \Exception
     */
    public function sayHello(?string $name):void
    {
        if($name===null) throw new \Exception('Name tidak boleh null');
        echo "Hello $name saya $this->username";
    }
}
