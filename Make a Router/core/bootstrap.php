<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/functions.php';
require 'core/Task.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//var_dump($config);

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
