<?php

class Task
{
  private $id;
  private $title;
  private $description;
  private $isCompleted;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
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

  public function getIsCompleted(): int
  {
    return $this->isCompleted;
  }

  public function setIsCompleted(int $isCompleted): void
  {
    $this->isCompleted = $isCompleted;
  }
}
