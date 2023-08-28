<?php

namespace SipalingNgoding\Test;

class Manager extends Person
{
    protected bool $status;
    public function __construct(string $username, string $address, bool $status = false)
    {
        parent::__construct($username, $address);
        $this->status = $status;
    }
}
