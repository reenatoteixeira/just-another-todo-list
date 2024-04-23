<?php
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/../models/Message.php');
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../models/dao/UserDAO.php');

$message = new Message();
$data = $_POST;

if (!empty($data)) {
  if ($data['type'] === 'register') {
    $firstName = $data['first-name'];
    $lastName = $data['last-name'];
    $email = $data['email'];
    $password = $data['password'];
    $checkPassword = $data['check-password'];

    if ($firstName && $lastName && $email && $password) {
    } else {
      $message->setMessage('Please fill in all fields', 'error', 'back');
    }
  }

  if ($data['type'] === 'login') {
  }
}
