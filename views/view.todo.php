<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../views/partials/template.navbar.php');
require_once(__DIR__ . '/../views/partials/template.heading.php');
require_once(__DIR__ . '/../models/dao/TaskDAO.php');
require_once(__DIR__ . '/../models/dao/UserDAO.php');

$userDAO = new UserDAO($pdo);
$taskDAO = new TaskDAO($pdo);

$userData = $userDAO->verifyToken(true);
$tasks = $taskDAO->read(0, 0, $userData->getID());
?>

<section class="mt-44">
  <?php if (count($tasks) === 0) : ?>
    <div class="flex items-center justify-center">
      <div class="border-gray-300 border-2 rounded-lg border-dashed w-full py-32 px-4">
        <div class="m-auto col-span-3 flex flex-col items-center justify-center">
          <i class="uil uil-file-plus text-4xl text-gray-400"></i>
          <h3 class="font-semibold">
            No tasks
          </h3>
          <p class="text-gray-400">
            Get started by creating a new task.
          </p>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php foreach ($tasks as $task) : ?>
      <div class="bg-amber-200 shadow-lg rounded-lg flex flex-col justify-between">
        <div class="p-4">
          <div>
            <h2 class="font-bold">
              <?= $task->getTitle() ?>
            </h2>
          </div>

          <?php if (!empty($task->getDescription())) : ?>
            <hr class="border-amber-300 my-2">
            <p><?= $task->getDescription() ?></p>
          <?php endif; ?>
        </div>

        <div class="bg-amber-300 p-2 rounded-b-lg">
          <div class="flex justify-between">
            <div>
              <?php require(__DIR__ . '/partials/button.mark-done.php') ?>
            </div>

            <div class="flex">
              <?php
              require(__DIR__ . '/partials/button.edit.php');
              require(__DIR__ . '/partials/button.delete.php');
              ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>