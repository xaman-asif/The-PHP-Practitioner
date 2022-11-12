<?php 

$person =[
  'age' => 31,
  'hair' => 'brown',
  'career' => 'Web Development'
];
echo '<pre>';
die(var_dump($person));
//die will stop the program just here
//won't go to require
echo '</pre>';
require 'index.view.php';

?>