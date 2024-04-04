<form action="/config/process.php" method="post">
  <input type="hidden" name="type" value="delete">
  <input type="hidden" name="id" value="<?= $task->getID() ?>">
  <input type="hidden" name="deleted" value="1">
  <input type="hidden" name="heading" value="<?= $heading ?>">
  <button type="submit" class="ml-2 rounded-md bg-amber-600 px-3 py-2 text-white text-sm font-semibold shadow-sm sm:text-base hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200">
    <i class="uil uil-trash-alt"></i> Delete
  </button>
</form>