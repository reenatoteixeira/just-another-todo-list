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
    $taskUser = $task->getUserID();
    $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description, user_id) VALUES (:title, :description, :user_id)");
    $stmt->bindParam(':title', $taskTitle);
    $stmt->bindParam(':description', $taskDescription);
    $stmt->bindParam(':user_id', $taskUser);
    $stmt->execute();
  }

  public function read(int $completed, int $deleted, int $userId): array
  {
    $tasks = [];
    $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE user_id = :user_id AND completed = :completed AND deleted = :deleted ORDER BY id DESC");
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':completed', $completed);
    $stmt->bindParam(':deleted', $deleted);
    $stmt->execute();
    $data = $stmt->fetchAll();

    foreach ($data as $taskData) {
      $task = new Task();
      $task->setId($taskData['id']);
      $task->setTitle($taskData['title']);
      $task->setDescription($taskData['description']);
      $task->setCompleted($taskData['completed']);
      $task->setDeleted($taskData['deleted']);
      $tasks[] = $task;
    }

    return $tasks;
  }

  public function edit(Task $task): void
  {
    $taskId = $task->getID();
    $taskTitle = $task->getTitle();
    $taskDescription = $task->getDescription();
    $stmt = $this->pdo->prepare("UPDATE tasks SET title = :title, description = :description WHERE id = :id");
    $stmt->bindParam(':title', $taskTitle);
    $stmt->bindParam(':description', $taskDescription);
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

  public function complete(Task $task): void
  {
    $taskId = $task->getID();
    $taskCompleted = $task->getCompleted();
    $stmt = $this->pdo->prepare("UPDATE tasks SET completed = :completed WHERE id = :id");
    $stmt->bindParam(':id', $taskId);
    $stmt->bindParam(':completed', $taskCompleted);
    $stmt->execute();
  }
}
