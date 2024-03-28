<?php
$config = [
  'host' => 'localhost',
  'username' => 'root',
  'password' => '123456',
  'database' => 'jatl_db'
];

$pdo = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
