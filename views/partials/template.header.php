<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../models/Message.php');
require_once(__DIR__ . '/../../models/dao/UserDAO.php');

$message = new Message();
$flashMessage = $message->getMessage();

if (!empty($flashMessage['message'])) {
  $message->clearMessage();
}

$userDAO = new UserDAO($pdo);
$userData = $userDAO->verifyToken();
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>JATL | <?= $heading ?></title>
</head>

<body class="min-h-screen relative">
  <header class="bg-white w-full">
    <?php
    require_once(__DIR__ . '/template.navbar.php');

    if ($showHeading) {
      require_once(__DIR__ . '/template.heading.php');
    } ?>
  </header>

  <main class="<?= $showHeading ? 'pt-40' : 'pt-24' ?> mx-auto max-w-7xl pb-24 px-4 sm:px-6 lg:px-8">
    <?php if (!empty($flashMessage['message'])) {
      require_once(__DIR__ . '/alert.flash-message.php');
    } ?>