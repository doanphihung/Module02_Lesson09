<?php
include_once "Element.php";

class Queue
{
    private $font = NULL;
    private $back = NULL;

    public function isEmpty()
    {
        return $this->font == NULL;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element($value);
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next =$this->back;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return NULL;
        } else {
            $removedValue = $this->font->value;
            $this->font = $this->font->next;
            return $removedValue;

        }
    }
}





