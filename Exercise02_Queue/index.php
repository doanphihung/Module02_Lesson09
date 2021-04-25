<?php
include_once "Queue.php";
$queue = new Queue();
$queue->enqueue("Hung");
$queue->enqueue("Phi");
$queue->enqueue("Doan");
echo"<pre>";
var_dump($queue);
echo"<hr>";
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
var_dump($queue);
var_dump($queue->isEmpty());