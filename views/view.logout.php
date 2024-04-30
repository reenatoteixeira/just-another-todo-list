<?php
require_once(__DIR__ . '/../views/partials/template.header.php');

if ($userDAO) {
  $userDAO->destroyToken();
}
