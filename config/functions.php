<?php
function checkUrl(string $url): bool
{
  return $_SERVER['REQUEST_URI'] === $url;
}

function checkFlashMsgType($type): string
{
  if ($type === 'success') {
    return 'bg-green-100 text-green-600';
  }

  if ($type === 'error') {
    return 'bg-red-100 text-red-600';
  }
}

function checkFlashMsgIcon($type): string
{
  if ($type === 'success') {
    return 'uil-check-circle';
  }

  if ($type === 'error') {
    return 'uil-times-circle';
  }
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
