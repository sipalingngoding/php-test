<?php

namespace SipalingNgoding\Test;

class Todo
{
    private string $todo;

    /**
     * @return string
     */
    public function getTodo(): string
    {
        return $this->todo;
    }

    /**
     * @param string $todo
     */
    public function setTodo(string $todo): void
    {
        $this->todo = $todo;
    }
}
