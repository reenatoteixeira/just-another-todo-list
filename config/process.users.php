<?php
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/../models/Message.php');
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../models/dao/UserDAO.php');

$message = new Message();
$userDAO = new UserDAO($pdo);
$data = $_POST;

if (!empty($data)) {
  if ($data['type'] === 'register') {
    $firstName = $data['first-name'];
    $lastName = $data['last-name'];
    $email = $data['email'];
    $password = $data['password'];
    $checkPassword = $data['check-password'];

    if ($firstName && $lastName && $email && $password) {
      if ($password === $checkPassword) {
        if ($userDAO->findByEmail($email) === false) {
          $user = new User();

          $userToken = $user->generateToken();
          $userPassword = $user->hashPassword($password);

          $user->setFirstName($firstName);
          $user->setLastName($lastName);
          $user->setEmail($email);
          $user->setPassword($userPassword);
          $user->setToken($userToken);

          $auth = true;

          $userDAO->create($user, $auth);
        } else {
          $message->setMessage('Email already exists', 'error', 'back');
        }
      } else {
        $message->setMessage('Passwords do not match', 'error', 'back');
      }
    } else {
      $message->setMessage('Please fill in all fields', 'error', 'back');
    }
  } else if ($data['type'] === 'login') {
    $email = $data['email'];
    $password = $data['password'];

    if ($userDAO->authUser($email, $password)) {
      $message->setMessage('Login successful', 'success', '/profile');
    } else {
      $message->setMessage('Email or password is incorrect', 'error', 'back');
    }
  } else {
    $message->setMessage('Invalid request', 'error', 'back');
  }
}
