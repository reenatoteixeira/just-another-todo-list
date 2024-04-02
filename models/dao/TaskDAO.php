<?php
require_once(__DIR__ . '/../Task.php');

class TaskDAO implements TaskInterface
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function create(Task $task)
  {
    $taskTitle = $task->getTitle();
    $taskDescription = $task->getDescription();
    $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $taskTitle);
    $stmt->bindParam(':description', $taskDescription);
    $stmt->execute();
  }

  public function read($state)
  {
    $tasks = [];
    $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE completed = :state ORDER BY id DESC");
    $stmt->bindParam(':state', $state);
    $stmt->execute();
    $data = $stmt->fetchAll();

    foreach ($data as $taskData) {
      $task = new Task();
      $task->setId($taskData['id']);
      $task->setTitle($taskData['title']);
      $task->setDescription($taskData['description']);
      $tasks[] = $task;
    }

    return $tasks;
  }

  public function update(Task $task)
  {
    $taskTitle = $task->getTitle();
    $taskDescription = $task->getDescription();
    $taskCompleted = $task->getCompleted();
    $taskId = $task->getID();
    $stmt = $this->pdo->prepare("UPDATE tasks SET title = :title, description = :description, completed = :completed WHERE id = :id");
    $stmt->bindParam(':title', $taskTitle);
    $stmt->bindParam(':description', $taskDescription);
    $stmt->bindParam(':completed', $taskCompleted);
    $stmt->bindParam(':id', $taskId);
    $stmt->execute();
  }

  public function delete($id)
  {
    $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
  }
}
