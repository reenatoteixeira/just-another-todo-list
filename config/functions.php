<?php
function checkUrl($url)
{
  return $_SERVER['REQUEST_URI'] === $url;
}

function abort($code = 404)
{
  http_response_code($code);
  require_once(__DIR__ . "/../controllers/{$code}.php");
  die();
}
