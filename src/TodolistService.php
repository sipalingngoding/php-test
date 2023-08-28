<?php

namespace SipalingNgoding\Test;

class TodolistService
{
    private TodolistRepository $todolistRepository;
    public function __construct(TodolistRepository $todolistRepository)
    {
        $this->todolistRepository = $todolistRepository;
    }

    public function show():void
    {
        $todoList = $this->todolistRepository->findAll();
        foreach ($todoList as $key=>$value)
        {
            echo ($key+1).". $value".PHP_EOL;
        }
    }

    public function add(string $todo):void
    {
        if(!$todo) throw new \Exception("Todo tidak boleh kosong");
        $newTodo = new Todo();
        $newTodo->setTodo($todo);
        if($this->todolistRepository->add($newTodo)) echo "Todo berhasil ditambahkan";
        else echo "Gagal ditambahkan";
    }
}
