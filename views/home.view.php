<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/partials/header.php');

$taskDAO = new TaskDAO($pdo);
$tasks = $taskDAO->read();
?>

<div class="flex bg-red-100 text-red-800 rounded-lg p-4 m-2" id="warning-msg">
  <div class="mr-4">
    <h2><strong>WARNING!</strong></h2>
    <p>This is a test environment. Be aware that creating a new task will make it public to whoever has access to this website. There's no way to DELETE a created task yet. We're working on future improvements, <a href="https://github.com/reenatoteixeira/just-another-todo-list/tree/stage" class="underline">click here</a> to check our GitHub repository. Thanks!</p>
  </div>
  <i class="uil uil-times text-xl hover:cursor-pointer" id="warning-close"></i>
</div>

<section class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <?php foreach ($tasks as $task) : ?>
    <div class="bg-amber-200 p-4 shadow-md overflow-hidden">
      <h2 class="font-bold"><?= $task->getTitle() ?></h2>
      <hr class="border-black my-2">
      <p><?= $task->getDescription() ?></p>
    </div>
  <?php endforeach; ?>

  <dialog class="w-11/12 max-w-lg rounded-lg">
    <form action="/config/process.php" method="POST">
      <div class="px-4 mt-2">
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Title</label>
        <input type="text" name="title" id="title" maxlength="125" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base" required>
      </div>
      <div class="px-4 my-2">
        <label for="description" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Description</label>
        <textarea name="description" id="description" rows="4" maxlength="255" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 text-sm placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 md:text-base"></textarea>
      </div>
      <div class="bg-gray-50 px-4 rounded-b-lg">
        <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:my-3 sm:w-auto md:text-base">Create task</button>
        <button type="button" class="my-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:my-0 sm:w-auto md:text-base">Cancel</button>
      </div>
    </form>
  </dialog>
</section>

<?php require_once(__DIR__ . '/partials/footer.php'); ?>