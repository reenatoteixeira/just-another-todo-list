<?php

function dd(mixed $var): void
{
  echo '<pre>';
  var_dump($var);
  echo '<pre>';
  die();
}

function abort(int $code = 404): void
{
  http_response_code($code);
  require_once "./views/404.php";
  die();
}

function routeToView(string $uri, array $routes): void
{
  if (array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
  } else {
    abort();
  }
}
