<?php

class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

}
echo"<pre>";
$stack = new Stack(6);
$stack->push("bmw");
$stack->push("motor");
$stack->push("audi");
$stack->push("mescerdes");
$stack->push(1);
print_r($stack);
echo"<hr>";
 echo $stack->pop();
 echo $stack->pop();
 echo $stack->pop();
print_r($stack);
echo"<hr>";
$stack->push("add1");
$stack->push("add2");
print_r($stack);
echo"<hr>";
var_dump($stack->isEmpty());
// $stack->pop();
// $stack->pop();
// $stack->pop();
// $stack->pop();
//var_dump($stack->isEmpty());
echo $stack->top();
//print_r($stack);







