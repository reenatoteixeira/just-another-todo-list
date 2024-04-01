<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
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
        <p class="text-gray-400">Get started by creating a new task.</p>
      </div>
    </div>
  </section>
<?php endif; ?>

<section class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 shadow-lg rounded-lg overflow-hidden">
      <div class="p-4">
        <h2 class="font-bold"><?= $task->getTitle() ?></h2>
        <hr class="border-amber-300 my-2">
        <p><?= $task->getDescription() ?></p>
      </div>

      <div class="bg-amber-300 p-2 flex justify-between">
        <div>
          <form action="/config/process.php" method="post">
            <input type="hidden" name="type" value="complete">
            <input type="hidden" name="id" value="<?= $task->getID() ?>">
            <input type="hidden" name="complete" value="1">
            <button disabled type="submit" class="inline-flex w-full justify-center rounded-md bg-amber-600 px-3 py-2 text-white shadow-sm hover:bg-amber-500 sm:w-auto disabled:bg-amber-500 disabled:text-amber-200">
              <i class="uil uil-check-circle"></i>
              <span class="ml-1 font-semibold">Mark as done</span>
            </button>
          </form>
        </div>

        <div class="flex">
          <form action="/config/process.php" method="post">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $task->getID() ?>">
            <button disabled type="submit" class="ml-2 inline-flex w-full justify-center rounded-md bg-amber-600 px-3 py-2 text-white shadow-sm hover:bg-amber-500 sm:w-auto disabled:bg-amber-500 disabled:text-amber-200">
              <i class="uil uil-edit"></i>
            </button>
          </form>

          <form action="/config/process.php" method="post">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $task->getID() ?>">
            <button type="submit" class="ml-2 inline-flex w-full justify-center rounded-md bg-amber-600 px-3 py-2 text-white shadow-sm hover:bg-amber-500 sm:w-auto disabled:bg-amber-500 disabled:text-amber-200">
              <i class="uil uil-trash-alt"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <?php require_once(__DIR__ . '/partials/dialog.php'); ?>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>