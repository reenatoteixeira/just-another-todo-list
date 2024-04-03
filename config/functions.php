<?php
function checkUrl(string $url): bool
{
  return $_SERVER['REQUEST_URI'] === $url;
}

function abort(int $code = 404): void
{
  http_response_code($code);
  require_once(__DIR__ . "/../controllers/{$code}.php");
  die();
}

function routeToController(string $uri, array $routes): void
{
  if (array_key_exists($uri, $routes)) {
    require_once($routes[$uri]);
  } else {
    abort();
  }
}
