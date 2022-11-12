<?php

require 'functions.php';

class Task
{
  public $description;
  protected $completed;

  public function __construct($description, $completed)
  {
    $this->description = $description;
    $this->completed = $completed;
  }

  public function isComplete()
  {
    return $this->completed;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$tasks = [
  new Task('Go to the store', false),
  new Task('Finish my screencast', false),
  new Task('Clean my room', true)
];


//$task->complete();
//var_dump($task->isComplete());

//dd($tasks);

require 'index.view.php';
