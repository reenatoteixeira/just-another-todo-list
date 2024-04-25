<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../views/partials/template.navbar.php');

if ($userDAO) {
  $userDAO->destroyToken();
}