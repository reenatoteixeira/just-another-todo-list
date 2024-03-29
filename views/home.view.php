<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
?>

<section class="m-auto grid grid-cols-3 max-[767px]:grid-cols-1">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 m-2 p-4 shadow-md">
      <h2 class="font-bold"><?= $task->getTitle() ?></h2>
      <hr class="border-black my-2">
      <p><?= $task->getDescription() ?></p>
    </div>
  <?php endforeach; ?>

  <div class="fixed bottom-2 right-2">
    <a href="/create">
      <button class="bg-slate-900 hover:bg-slate-600 font-bold py-2 px-4 rounded text-white"><i class="uil uil-plus"></i> New task</button>
    </a>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>