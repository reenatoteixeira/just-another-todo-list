<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../models/Message.php');

$message = new Message();
$flashMessage = $message->getMessage();

if (!empty($flashMessage['message'])) {
  $message->clearMessage();
}
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

<body class="h-full">
  <?php if (!empty($flashMessage['message'])) : ?>
    <div class="<?= checkFlashMsgType($flashMessage['type']) ?> flex items-center justify-between rounded-lg p-4 mt-44 mb-4 m-auto shadow-md text-sm max-w-xl sm:text-base" id="flash-msg">
      <h2 class="flex items-center space-x-2">
        <i class="<?= checkFlashMsgIcon($flashMessage['type']) ?> uil text-xl"></i>
        <span><?= $flashMessage['message'] ?></span>
      </h2>
      <button onclick="closeFlashMsg()">
        <i class="uil uil-times text-xl"></i>
      </button>
    </div>
  <?php endif; ?>