<?php
require 'functions.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';

//var_dump($config);

return new QueryBuilder(Connection::make($config['database']));
