<?php
class Stack
{
    public $stack = [];

    public function push($int)
    {
        array_unshift($this->stack, $int);
    }
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }

    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
}

