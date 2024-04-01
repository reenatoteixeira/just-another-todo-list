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
}
