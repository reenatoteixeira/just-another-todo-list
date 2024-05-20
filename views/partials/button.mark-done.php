<form action="/config/process.tasks.php" method="post">
  <input type="hidden" name="type" value="complete">
  <input type="hidden" name="id" value="<?= $task->getID() ?>">
  <input type="hidden" name="completed" value="1">
  <button type="submit" class="rounded-md bg-amber-600 px-3 py-2 text-white text-sm font-semibold shadow-sm hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200">
    <i class="uil uil-check-circle"></i> Mark as done
  </button>
</form>