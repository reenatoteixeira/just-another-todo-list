<header class="bg-white shadow fixed top-16 w-full z-0">
  <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8 flex justify-between">
    <div>
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">
        <?= $heading ?>
      </h1>
    </div>

    <?php if ($heading === 'To-do') {
      require_once(__DIR__ . '/button.new-task.php');
    }; ?>
  </div>
</header>

<main class="mx-auto max-w-7xl pt-44 pb-12 px-4 sm:px-6 lg:px-8">
