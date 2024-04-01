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
    <i class="uil uil-times text-xl hover:cursor-pointer" id="warning-close"></i>
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
    <div class="bg-amber-200 p-4 shadow-lg rounded-lg overflow-hidden">
      <h2 class="font-bold"><?= $task->getTitle() ?></h2>
      <hr class="border-amber-300 my-2">
      <p><?= $task->getDescription() ?></p>
      <div>
        <form action="/config/process.php" method="post">
          <input type="hidden" name="type" value="delete">
          <input type="hidden" name="id" value="<?= $task->getID() ?>">
          <button type="submit" class="mt-3 inline-flex justify-center rounded-md bg-amber-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-amber-500 sm:text-base">
            Delete
          </button>
        </form>
      </div>
    </div>
  <?php endforeach; ?>

  <dialog id="create-task-modal" class="w-11/12 max-w-lg rounded-lg backdrop:bg-black/60">
    <form action="/config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="px-4 mt-2">
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Title</label>
        <input type="text" name="title" id="title" maxlength="125" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base" required>
      </div>
      <div class="px-4 my-2">
        <label for="description" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Description</label>
        <textarea name="description" id="description" rows="4" maxlength="255" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 text-sm placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 md:text-base resize-none"></textarea>
      </div>
      <div class="bg-gray-50 px-4 rounded-b-lg">
        <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:my-3 sm:w-auto md:text-base">Create task</button>
        <button type="reset" onclick="closeNewTaskModal()" class="my-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:my-0 sm:w-auto md:text-base">Cancel</button>
      </div>
    </form>
  </dialog>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>