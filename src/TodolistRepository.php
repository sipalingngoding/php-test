<?php

namespace SipalingNgoding\Test;

class TodolistRepository
{
    private array $todoList = ['Makan','Belajar'];

    public function findAll():array
    {
        return $this->todoList;
    }

    public function add(Todo $todo):bool
    {
        $this->todoList[] = $todo->getTodo();
        return true;
    }

}


