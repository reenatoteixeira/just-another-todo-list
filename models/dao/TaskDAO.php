<?php
require_once(__DIR__ . '/../Task.php');

class TaskDAO implements TaskInterface
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function create(Task $task): void
  {
    $taskTitle = $task->getTitle();
    $taskDescription = $task->getDescription();
    $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->bindParam(':title', $taskTitle);
    $stmt->bindParam(':description', $taskDescription);
    $stmt->execute();
  }

  public function read(int $completed, int $deleted): array
  {
    $tasks = [];
    $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE completed = :completed AND deleted = :deleted ORDER BY id DESC");
    $stmt->bindParam(':completed', $completed);
    $stmt->bindParam(':deleted', $deleted);
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

  public function update(Task $task): void
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

  public function delete(Task $task): void
  {
    $taskId = $task->getID();
    $taskDeleted = $task->getDeleted();
    $stmt = $this->pdo->prepare("UPDATE tasks SET deleted = :deleted WHERE id = :id");
    $stmt->bindParam(':id', $taskId);
    $stmt->bindParam(':deleted', $taskDeleted);
    $stmt->execute();
  }
}
