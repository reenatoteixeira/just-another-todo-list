<dialog id="edit-task-modal" class="w-11/12 max-w-lg rounded-lg backdrop:bg-black/60">
  <div class="bg-gray-50 px-4 pb-4 pt-2">
    <div class="flex items-center justify-between">
      <h2 class="text-lg font-semibold">
        Edit task
      </h2>
      <button onclick="closeModal('edit-task-modal')">
        <i class="uil uil-times text-xl"></i>
      </button>
    </div>

    <hr class="border-gray-200 my-2 w-full">
    <p class="text-sm text-gray-400">
      Edit task title/description, then click "Save" to apply changes.
    </p>
  </div>

  <form action="/config/process.tasks.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" id="edit-task-modal-task-id">

    <div class="px-4 mt-2">
      <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
        Title
      </label>
      <input type="text" name="title" id="edit-task-modal-task-title" maxlength="125" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base" required>
    </div>

    <div class="px-4 mt-2 mb-4">
      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">
        Description
      </label>
      <textarea name="description" id="edit-task-modal-task-description" rows="4" maxlength="255" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 text-sm placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 resize-none"></textarea>
    </div>

    <div class="bg-gray-50 px-4 rounded-b-lg sm:space-x-2">
      <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:my-3 sm:w-32">
        Save
      </button>

      <button type="reset" onclick="closeModal('edit-task-modal')" class="my-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:my-0 sm:w-auto">
        Cancel
      </button>
    </div>
  </form>
</dialog>