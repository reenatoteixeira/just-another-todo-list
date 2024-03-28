<?php
require_once(__DIR__ . '/../models/Task.php');

class TaskDAO implements TaskInterface
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function create(Task $task)
  {
    $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $task->getTitle());
    $stmt->bindParam(':description', $task->getDescription());
    $stmt->execute();
  }

  public function read()
  {
  }

  public function update(Task $task)
  {
  }
  
  public function delete($id)
  {
  }
}
