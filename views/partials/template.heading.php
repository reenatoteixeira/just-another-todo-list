<div class="bg-white w-full shadow fixed top-0">
  <div class="flex justify-between max-w-7xl mx-auto pt-20 mt-2 pb-4 px-4 sm:px-6 lg:px-8">
    <div>
      <h1 class="text-2xl font-bold tracking-tight text-gray-900">
        <?= $heading ?>
      </h1>
    </div>


    <?php if ($heading === "To-do") {
      require_once(__DIR__ . '/button.new-task.php');
    }; ?>
  </div>
</div>