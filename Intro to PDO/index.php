<?php
require 'functions.php';
require 'Task.php';

$pdo = connectToDB();

$tasks = fetchAllTask($pdo);

require 'index.view.php';
