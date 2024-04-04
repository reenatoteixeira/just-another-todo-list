<button onclick="openEditTaskModal(this)" class="ml-2 rounded-md bg-amber-600 px-3 py-2 text-white font-semibold shadow-sm hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200" task-id="<?= $task->getID() ?>" task-title="<?= $task->getTitle() ?>" task-description="<?= $task->getDescription() ?>">
  <i class="uil uil-edit"></i> Edit
</button>