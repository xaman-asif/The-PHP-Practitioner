<?php

require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';
//dd($app);
//require $router->direct($uri);


//$router = Router::load('routes.php');
//$router->direct(Request::uri());

require Router::load('routes.php')->direct(Request::uri());
