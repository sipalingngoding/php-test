<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class TodolistRepositoryTest extends TestCase
{
    private TodolistRepository $todolistRepository;
    protected function setUp(): void
    {
        $this->todolistRepository = new TodolistRepository();
    }
    public function testFindAll():void
    {
        self::assertIsArray($this->todolistRepository->findAll());
        self::assertSame(['Makan','Belajar'],$this->todolistRepository->findAll());
    }

    public function testAdd():void
    {
        $todo = new Todo();
        $todo->setTodo('Tidur');
        self::assertTrue($this->todolistRepository->add($todo));
        self::assertSame(['Makan','Belajar','Tidur'],$this->todolistRepository->findAll());
    }

    public function testFindAllTwo():void
    {
        self::assertIsArray($this->todolistRepository->findAll());
        self::assertSame(['Makan','Belajar'],$this->todolistRepository->findAll());
    }
}
