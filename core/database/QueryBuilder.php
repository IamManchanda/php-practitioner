<?php

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo) {
    $this -> pdo = $pdo;
  }

  public function selectAll($table, $intoClass) {
    $statement = $this -> pdo -> prepare("SELECT * FROM $table");
    $statement -> execute();

    return $statement -> fetchAll(PDO::FETCH_CLASS, $intoClass);
  }

  public function insert($table, $parameters) {
    $sql = sprintf(
      'INSERT INTO %s (%s) VALUES (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this -> pdo -> prepare($sql);
      $statement -> execute($parameters);
    } catch (Exception $e) {
      die('Whoops something went wrong');
    }
  }
}
