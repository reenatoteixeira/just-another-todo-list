<form action="/config/process.php" method="post">
  <input type="hidden" name="type" value="complete">
  <input type="hidden" name="id" value="<?= $task->getID() ?>">
  <input type="hidden" name="completed" value="1">
  <button type="submit" class="rounded-md bg-amber-600 px-3 py-2 text-white shadow-sm hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200">
    <i class="uil uil-check-circle"></i>
    <span class="font-semibold">
      Mark as done
    </span>
  </button>
</form>