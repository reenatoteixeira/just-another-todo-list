<?php

require_once(__DIR__ . '/../User.php');
require_once(__DIR__ . '/../Message.php');

class UserDAO implements UserInterface
{
  private $pdo;
  private $message;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
    $this->message = new Message();
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
    $stmt = $this->pdo->prepare("INSERT INTO users (
    first_name, last_name, email, password, token
    ) VALUES (
    :first_name, :last_name, :email, :password, :token)");
    $stmt->bindParam(':first_name', $user->getFirstName());
    $stmt->bindParam(':last_name', $user->getLastName());
    $stmt->bindParam(':email', $user->getEmail());
    $stmt->bindParam(':password', $user->getPassword());
    $stmt->bindParam(':token', $user->getToken());
    $stmt->execute();

    if ($authUser) {
      $this->setSessionToken($user->getToken());
    }
  }

  public function update(User $user)
  {
  }

  public function setSessionToken(string $token, bool $redirect = true)
  {
    $_SESSION['token'] = $token;
    if ($redirect) {
      $this->message->setMessage('You are now logged in', 'success', '/profile');
    }
  }

  public function verifyToken(bool $protected = false)
  {
    if (!empty($_SESSION['token'])) {
      $token = $_SESSION['token'];
      $user = $this->findByToken($token);

      if ($user) {
        return $user;
      } else if ($protected) {
        return false;
        $this->message->setMessage('You are not logged in', 'error', '/login');
      }
    } else if ($protected) {
      $this->message->setMessage('You are not logged in', 'error', '/login');
    }
  }

  public function destroyToken()
  {
    $_SESSION['token'] = "";
    $this->message->setMessage('You are now logged out', 'success');
  }

  public function authUser(string $email, string $password)
  {
  }

  public function findByToken(string $token)
  {
    if ($token != "") {
      $stmt = $this->pdo->prepare("SELECT * FROM users WHERE token = :token");
      $stmt->bindParam(':token', $token);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        $data = $stmt->fetch();
        $user = $this->buildUser($data);
        return $user;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function findByEmail(string $email)
  {
    if ($email != "") {
      $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        $data = $stmt->fetch();
        $user = $this->buildUser($data);
        return $user;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function findById(int $id)
  {
  }

  public function changePassword(User $user)
  {
  }
}
