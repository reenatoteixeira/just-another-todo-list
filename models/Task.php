<?php
class Task
{
  private $id;
  private $title;
  private $description;
  private $completed;
  private $deleted;
  private $user_id;

  public function getID(): int
  {
    return $this->id;
  }

  public function setID(int $id): void
  {
    $this->id = $id;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setTitle(string $title): void
  {
    $this->title = $title;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function getCompleted(): int
  {
    return $this->completed;
  }

  public function setCompleted(int $completed): void
  {
    $this->completed = $completed;
  }

  public function getDeleted(): int
  {
    return $this->deleted;
  }

  public function setDeleted(int $deleted): void
  {
    $this->deleted = $deleted;
  }

  public function getUserId(): int
  {
    return $this->user_id;
  }

  public function setUserId(int $user_id): void
  {
    $this->user_id = $user_id;
  }
}

interface TaskInterface
{
  public function create(Task $task);
  public function read(int $completed, int $deleted, int $userId);
  public function edit(Task $task);
  public function complete(Task $task);
  public function delete(Task $task);
}
