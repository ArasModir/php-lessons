<?php

$person = [
  'age' => 25,
  'hair' => 'brown',
  'carrier' => 'web developer'
];

$person['name'] = 'ali';

unset($person['age']);

// die(var_dump($person));
// echo '</pre>';

// echo $person['age'];

require 'index.view.php'

?>
