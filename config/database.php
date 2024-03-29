<?php
$config = [
  'host' => 'just-another-todo-list_stage-mysql',
  'database' => 'just-another-todo-list',
  'username' => 'mysql',
  'password' => '9425c7846d2f4a00b4e4',
];

$pdo = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
