<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
?>

<section class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 p-4 shadow-md overflow-hidden">
      <h2 class="font-bold"><?= $task->getTitle() ?></h2>
      <hr class="border-black my-2">
      <p><?= $task->getDescription() ?></p>
    </div>
  <?php endforeach; ?>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>