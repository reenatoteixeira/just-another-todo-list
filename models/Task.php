<?php
class Task
{
  private $id;
  private $title;
  private $description;
  private $completed;

  public function getID()
  {
    return $this->id;
  }

  public function setID($id)
  {
    $this->id = $id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getCompleted()
  {
    return $this->completed;
  }

  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
}

interface TaskInterface
{
  public function create(Task $task);
  public function read();
  public function update(Task $task);
  public function delete($id);
}
