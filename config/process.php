<?php
require_once(__DIR__ . '/database.php');
require_once(__DIR__ . '/../dao/TaskDAO.php');

$taskDAO = new TaskDAO($pdo);

$taskTitle = $_POST['title'];
$taskDescription = $_POST['description'];

$newTask = new Task();
$newTask->setTitle($taskTitle);
$newTask->setDescription($taskDescription);

$taskDAO->create($newTask);
header("Location: /");
