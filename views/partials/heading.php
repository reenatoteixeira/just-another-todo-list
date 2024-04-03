<header class="bg-white shadow fixed top-16 w-full z-0">
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
    <div>
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
    </div>
    <?php if ($heading === 'To-do') : ?>
      <div class="fixed bottom-2 right-4 sm:static">
        <button type="button" onclick="openNewTaskModal()" class="bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm rounded-md hover:bg-indigo-500 md:text-base">
          <i class="uil uil-plus"></i> New task
        </button>
      </div>
    <?php endif; ?>
  </div>
</header>

<main class="pt-40">
  <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">