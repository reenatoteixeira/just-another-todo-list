<?php
require_once './config/functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => './views/index.php',
  '/done' => './views/done.php',
];

routeToView($uri, $routes);
