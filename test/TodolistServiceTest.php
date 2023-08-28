<?php

namespace SipalingNgoding\Test;

use PHPUnit\Framework\TestCase;

class TodolistServiceTest extends TestCase
{
    private TodolistService $todolistService;
    protected function setUp(): void
    {
        $this->todolistService = new TodolistService(new TodolistRepository());
    }

    public function testShow():void
    {
        $expected = <<<todolist
        1. Makan
        2. Belajar
        
        todolist;
        self::expectOutputString($expected);
        $this->todolistService->show();
    }

    /** @test
     *
     */
    public function addSuccess():void
    {
        self::expectOutputRegex('/todo berhasil ditambahkan/i');
        $this->todolistService->add('Tidur');

        $expected = <<<todolist
        1. Makan
        2. Belajar
        3. Tidur
        
        todolist;
        self::expectOutputString($expected);
        $this->todolistService->show();
    }

    public function testAddFail():void
    {
        self::expectException(\Exception::class);
        self::expectExceptionMessageMatches('/todo tidak boleh kosong/i');
        $this->todolistService->add('');
    }
}
