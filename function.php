<?php

function connectToDb() {
  try {
    return new PDO('mysql:host= 127.0.0.1; dbname= mytodo', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
    }
  }  

function fetchAllTasks() {

  $statement = $pdo-> prepare('select from todos');

  $statement -> execute();

  return $tasks = $statement -> fetchAll(PDO::FETCH_CLASS,'Task');
}

function dd($data) {

  echo '<pre>';

  die(var_dump($data));

  echo '</pre>';
}
  ?>
