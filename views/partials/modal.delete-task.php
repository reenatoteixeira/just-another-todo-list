<dialog id="delete-task-modal" class="w-11/12 max-w-lg rounded-lg backdrop:bg-black/60">
  <div class="bg-gray-50 px-4 pb-4 pt-2">
    <div class="flex items-center justify-between">
      <h2 class="text-lg font-semibold">
        Are you sure?
      </h2>
      <button onclick="closeModal('delete-task-modal')">
        <i class="uil uil-times text-xl"></i>
      </button>
    </div>

    <hr class="border-gray-200 my-2 w-full">
    <p class="text-sm text-gray-400">
      Once you confirm, the following task will be permanently deleted.
    </p>
  </div>

  <form action="/config/process.php" method="POST">
    <input type="hidden" name="type" value="delete">
    <input type="hidden" name="id" value="<?= $task->getID() ?>">
    <input type="hidden" name="deleted" value="1">
    <input type="hidden" name="heading" value="<?= $heading ?>">

    <div class="bg-gray-50 px-4 rounded-b-lg">
      <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:my-3 sm:w-auto md:text-base">
        Yes, delete
      </button>

      <button type="reset" onclick="closeModal('delete-task-modal')" class="my-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:my-0 sm:w-auto md:text-base">
        Cancel
      </button>
    </div>
  </form>
</dialog>