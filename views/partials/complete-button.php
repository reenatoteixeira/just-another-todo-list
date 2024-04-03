<form action="/config/process.php" method="post">
  <input type="hidden" name="type" value="complete">
  <input type="hidden" name="id" value="<?= $task->getID() ?>">
  <input type="hidden" name="title" value="<?= $task->getTitle() ?>">
  <input type="hidden" name="description" value="<?= $task->getDescription() ?>">
  <input type="hidden" name="complete" value="1">
  <button type="submit" class="rounded-md bg-amber-600 px-3 py-2 text-white shadow-sm hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200">
    <i class="uil uil-check-circle"></i>
    <span class="font-semibold">Mark as done</span>
  </button>
</form>