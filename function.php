<?php



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
