<?php

require_once(__DIR__ . '/../User.php');

class UserDAO implements UserInterface
{
  private $pdo;
  private $url;

  public function __construct(PDO $pdo, string $url)
  {
    $this->pdo = $pdo;
    $this->url = $url;
  }

  public function buildUser(array $data): User
  {
    $user = new User();
    $user->setId($data['id']);
    $user->setFirstName($data['first_name']);
    $user->setLastName($data['last_name']);
    $user->setEmail($data['email']);
    $user->setPassword($data['password']);
    $user->setToken($data['token']);
    return $user;
  }

  public function create(User $user, bool $authUser = false)
  {
  }

  public function update(User $user)
  {
  }

  public function setSessionToken(string $token, bool $redirect = true)
  {
  }

  public function verifyToken(string $token)
  {
  }

  public function authUser(string $email, string $password)
  {
  }

  public function findByToken(string $token)
  {
  }

  public function findByEmail(string $email)
  {
  }

  public function findById(int $id)
  {
  }

  public function changePassword(User $user)
  {
  }
}
