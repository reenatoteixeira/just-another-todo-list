<?php

$config = [
  'host' => 'localhost',
  'username' => 'root',
  'password' => '123456',
  'database' => 'jatl_db'
];

try {
  $db = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "Error: $error";
}
