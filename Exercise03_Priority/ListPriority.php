<?php
include_once "Person.php";

class ListPriority
{
    private $front = NULL;
    private $back = NULL;

    public function isEmpty()
    {
        return $this->front == NULL;
    }

    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Person($name, $code);
        $this->back->name = $name;
        $this->back->code = $code;

        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return NULL;
        } else {
            $removedValue = $this->front->value;
            $this->front = $this->front->next;
            return $removedValue;

        }
    }

    public function displayList()
    {
        $count = 1;
        $arrayList = array();
        $current = $this->front;
        while (!$current == NULL) {
            array_push($arrayList, $current->name);
            $current = $current->next;
        }
        foreach ($arrayList as $value) {
            echo $count . ", " . "$value" . "<br>";
            $count++;
        }
    }
}

$listPriority = new ListPriority();
$listPriority->enqueue("A", 1);
$listPriority->enqueue("B", 2);
$listPriority->enqueue("C", 3);
$listPriority->displayList();
