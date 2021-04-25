<?php
class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = array();
    }
    public function push($data)
    {
        array_unshift($this->stack, $data);
    }
    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Không có phần tử để xóa";
        } else {
            array_shift($this->stack);
        }
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
}
