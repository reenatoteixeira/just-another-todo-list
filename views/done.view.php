<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read(1, 0);
?>

<div class="flex flex-col bg-red-100 text-red-800 rounded-lg p-4 mb-4 text-sm sm:text-base" id="warning-msg">
  <div class="flex items-center justify-between">
    <h2><i class="uil uil-exclamation-triangle"></i> <strong>WARNING</strong></h2>
    <button onclick="closeWarning()">
      <i class="uil uil-times text-xl"></i>
    </button>
  </div>
  <hr class="border-red-200 my-2 w-full">
  <p>This is a test environment. Be aware that creating a task will make it public to anyone with access to this site. It's currently possible to delete any task (including other people's) by clicking on "Delete", so use it wisely. We're working on other improvements, <a href="https://github.com/reenatoteixeira/just-another-todo-list/tree/stage" target="_blank" class="underline">click here</a> to check our GitHub repository. Thanks!</p>
</div>

<?php if (count($tasks) === 0) : ?>
  <section class="flex items-center justify-center">
    <div class="border-gray-300 border-2 rounded-lg border-dashed w-full py-32 px-4">
      <div class="m-auto col-span-3 flex flex-col items-center justify-center">
        <i class="uil uil-file-plus text-4xl text-gray-400"></i>
        <h3 class="font-semibold">No tasks</h3>
        <p class="text-gray-400">Get started by completing a task.</p>
      </div>
    </div>
  </section>
<?php endif; ?>

<section class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 shadow-lg rounded-lg flex flex-col justify-between">
      <div class="p-4">
        <div>
          <h2 class="font-bold"><?= $task->getTitle() ?></h2>
        </div>
        <?php if (!empty($task->getDescription())) : ?>
          <hr class="border-amber-300 my-2">
          <p><?= $task->getDescription() ?></p>
        <?php endif; ?>
      </div>

      <div class="bg-amber-300 p-2 rounded-b-lg">
        <div class="flex justify-end">
          <div class="flex">
            <?php require(__DIR__ . '/partials/delete-button.php'); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>