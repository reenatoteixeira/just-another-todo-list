<button type="button" onclick="openModal(this)" modal-id="edit-task-modal" task-id="<?= $task->getID() ?>" task-title="<?= $task->getTitle() ?>" task-description="<?= $task->getDescription() ?>" class="ml-2 rounded-md bg-amber-600 px-3 py-2 text-white text-sm font-semibold shadow-sm hover:bg-amber-500 disabled:bg-amber-500 disabled:text-amber-200">
  <i class="uil uil-edit"></i> Edit
</button>