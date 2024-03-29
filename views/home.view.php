<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
?>

<div class="flex bg-red-100 text-red-800 rounded-lg p-4 mx-2" id="warning-msg">
  <div class="mr-4">
    <h2><strong>WARNING!</strong></h2>
    <p>This is a test environment. Be aware that creating a new task will make it public to whoever has access to this website. There's no way to DELETE a created task yet. We're working on future improvements, <a href="https://github.com/reenatoteixeira/just-another-todo-list/tree/stage" class="underline">click here</a> to check our GitHub repository. Thanks!</p>
  </div>
  <i class="uil uil-times text-xl hover:cursor-pointer" id="warning-close"></i>
</div>

<section class="m-auto grid grid-cols-3 max-[767px]:grid-cols-1">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 m-2 p-4 shadow-md">
      <h2 class="font-bold"><?= $task->getTitle() ?></h2>
      <hr class="border-black my-2">
      <p><?= $task->getDescription() ?></p>
      <div class="mt-2">
        <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-check-circle"></i></button>
        <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-edit"></i></button>
        <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-trash-alt"></i></button>
      </div>
    </div>
  <?php endforeach; ?>

  <div class="fixed bottom-2 right-2">
    <a href="/create">
      <button class="bg-slate-900 hover:bg-slate-600 font-bold py-2 px-4 rounded text-white"><i class="uil uil-plus"></i> New task</button>
    </a>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>