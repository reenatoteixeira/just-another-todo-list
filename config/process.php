<?php
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');

$taskDAO = new TaskDAO($pdo);
$data = $_POST;

if (!empty($data)) {
  if ($data['type'] === 'create') {
    $taskTitle = $data['title'];
    $taskDescription = $data['description'];

    $newTask = new Task();
    $newTask->setTitle($taskTitle);
    $newTask->setDescription($taskDescription);

    $taskDAO->create($newTask);
    header("Location: /");
  }

  if ($data['type'] === 'delete') {
    $deletedTask = new Task();
    $deletedTask->setID((int)$data['id']);
    $deletedTask->setDeleted($data['deleted']);

    $taskDAO->delete($deletedTask);

    if ($data['heading'] === 'To-do') {
      header("Location: /");
    }

    if ($data['heading'] === 'Done') {
      header("Location: /done");
    }
  }

  if ($data['type'] === 'complete') {
    $completedTask = new Task();
    $completedTask->setID($data['id']);
    $completedTask->setCompleted($data['completed']);

    $taskDAO->complete($completedTask);
    header("Location: /");
  }

  if ($data['type'] === 'edit') {
    $editedTask = new Task();
    $editedTask->setID((int)$data['id']);
    $editedTask->setTitle($data['title']);
    $editedTask->setDescription($data['description']);

    $taskDAO->edit($editedTask);
    header("Location: /");
  }
}
