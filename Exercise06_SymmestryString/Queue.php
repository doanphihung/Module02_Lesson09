<?php
include "Node.php";

class Queue
{
    public $lastNode = null;
    public $firstNode = null;

    public function enqueue($obj)
    {
        if ($this->firstNode == null) {
            $this->firstNode = $obj;
            $this->lastNode = $this->firstNode;
        } else {
            $oldNode = $this->lastNode;
            $this->lastNode = $obj;
            $oldNode->next = $obj;
        }
    }
    public function dequeue()
    {
        if ($this->firstNode == null) {
            echo "Không có để lấy ra";
        } else {
            $frond = $this->firstNode;
            $this->firstNode = $this->firstNode->next;
            return $frond;
        }
    }
}



