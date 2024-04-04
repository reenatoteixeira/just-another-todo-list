<dialog id="new-task-modal" class="w-11/12 max-w-lg rounded-lg backdrop:bg-black/60">
  <div class="bg-gray-50 px-4 pb-4 pt-2">
    <div class="flex items-center justify-between">
      <h2 class="text-lg font-semibold">
        Create a new task
      </h2>
      <button onclick="closeModal('new-task-modal')">
        <i class="uil uil-times text-xl"></i>
      </button>
    </div>

    <hr class="border-gray-200 my-2 w-full">
    <p class="text-sm text-gray-400">
      Fill in the fields below to create a new task. Remember that creating a task will make it public to anyone with access to this site.
    </p>
  </div>

  <form action="/config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="px-4 mt-2">
      <label for="title" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">
        Title
      </label>
      <input type="text" name="title" id="title" maxlength="125" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base" required>
    </div>

    <div class="px-4 mt-2 mb-4">
      <label for="description" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">
        Description
      </label>
      <textarea name="description" id="description" rows="4" maxlength="255" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 text-sm placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 md:text-base resize-none"></textarea>
    </div>

    <div class="bg-gray-50 px-4 rounded-b-lg">
      <button type="submit" class="mt-3 inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:my-3 sm:w-auto md:text-base">
        Create task
      </button>

      <button type="reset" onclick="closeModal('new-task-modal')" class="my-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:my-0 sm:w-auto md:text-base">
        Cancel
      </button>
    </div>
  </form>
</dialog>