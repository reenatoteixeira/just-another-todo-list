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
