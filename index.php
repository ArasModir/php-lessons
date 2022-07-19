<?php

require 'function.php'

require 'connection.php'

require 'Task.php'

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';

?>
