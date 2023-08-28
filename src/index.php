<?php

use SipalingNgoding\Test\Todo;
use SipalingNgoding\Test\TodolistRepository;

require __DIR__."/../vendor/autoload.php";

$repo = new TodolistRepository();
var_dump($repo->findAll());
$todo =  new Todo();
$todo->setTodo('Tidur');
$repo->add($todo);

var_dump($repo->findAll());
