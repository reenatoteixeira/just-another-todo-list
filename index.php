<?php
require_once(__DIR__ . '/config/functions.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
  require_once(__DIR__ . '/./controllers/home.php');
}
