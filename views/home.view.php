<?php
$heading = 'To-do tasks';
require_once(__DIR__ . '/config/database.php');
require_once(__DIR__ . '/dao/TaskDAO.php');
require_once(__DIR__ . '/templates/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
?>
<div class="bg-red-500 text-white p-4 max-w-5xl m-auto ">
  <p><strong>WARNING:</strong> Be aware that creating a new task will make it public to whoever has access to this website. There's no way to DELETE a created task yet. We're working on future improvements. Thanks!</p>
</div>

<section class="max-w-5xl m-auto grid grid-cols-3 max-[767px]:grid-cols-1">
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
    <a href="/create.php">
      <button class="bg-slate-900 hover:bg-slate-600 font-bold py-2 px-4 rounded text-white"><i class="uil uil-plus"></i> New task</button>
    </a>
  </div>
</section>

<?php require_once(__DIR__ . '/./templates/footer.php'); ?>