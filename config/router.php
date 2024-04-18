<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
  '/' => './controllers/home.php',
  '/todo' => './controllers/todo.php',
  '/about' => './controllers/about.php',
  '/done' => './controllers/done.php',
  '/login' => './controllers/login.php',
  '/register' => './controllers/register.php',
];

routeToController($uri, $routes);
