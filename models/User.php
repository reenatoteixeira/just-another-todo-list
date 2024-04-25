<?php
class User
{
  private $id;
  private $firstName;
  private $lastName;
  private $email;
  private $password;
  private $token;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;
  }

  public function getLastName(): string
  {
    return $this->lastName;
  }

  public function setLastName(string $lastName): void
  {
    $this->lastName = $lastName;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword(string $password): void
  {
    $this->password = $password;
  }

  public function getToken(): string
  {
    return $this->token;
  }

  public function setToken(string $token): void
  {
    $this->token = $token;
  }

  public function generateToken(): string
  {
    return bin2hex(random_bytes(50));
  }

  public function hashPassword(string $password): string
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }
}

interface UserInterface
{
  public function buildUser(array $data);
  public function create(User $user, bool $authUser = false);
  public function update(User $user);
  public function setSessionToken(string $token, bool $redirect = true);
  public function verifyToken(string $token);
  public function authUser(string $email, string $password);
  public function findByToken(string $token);
  public function findByEmail(string $email);
  public function findById(int $id);
  public function changePassword(User $user);
}
