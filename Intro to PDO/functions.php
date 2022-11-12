<?php

function dd($data)
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function connectToDB()
{
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $e) {
    echo ($e->getMessage());
  }
}

function fetchAllTask($pdo)
{
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  //var_dump($statement->fetchAll());
  //dd($statement->fetchAll());

  // $results = $statement->fetchAll(PDO::FETCH_OBJ);
  $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  $results[0]->foobar();
  //dd($results[0]->description);
  return $results;
}
