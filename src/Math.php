<?php

namespace SipalingNgoding\Test;

class Math
{
    public function add($a,$b) : int | float
    {
        return $a+$b;
    }

    public function multiply($a,$b) : int | float
    {
        return $a*$b;
    }

    public function divide($a,$b): int | float
    {
        return $a/$b;
    }
}
