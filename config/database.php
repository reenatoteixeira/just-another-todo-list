<?php
$config = [
  'host' => 'cloud.reenatoteixeira.dev',
  'database' => 'just-another-todo-list',
  'username' => 'root',
  'password' => 'f5c0f0cb1e256c3743f4',
];

$pdo = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
