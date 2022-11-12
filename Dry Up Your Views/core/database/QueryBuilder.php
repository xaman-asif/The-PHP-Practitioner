<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    // echo "Ok";
    // echo $table;
    $statement = $this->pdo->prepare("select * from $table");
    
    $statement->execute();

    //var_dump($statement->fetchAll());
    //dd($statement->fetchAll());

    // $results = $statement->fetchAll(PDO::FETCH_OBJ);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    $results[0]->foobar();
    //dd($results[0]->description);
    return $results;
  }
}
