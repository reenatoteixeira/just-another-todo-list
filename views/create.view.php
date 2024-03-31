<?php require_once(__DIR__ . '/partials/header.php'); ?>
<section>
  <form action="/config/process.php" method="POST" class="max-[767px]:mx-4 max-w-2xl m-auto grid grid-cols-1 gap-4">
    <div>
      <label for="title" class="font-bold">Title</label>
      <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" required maxlength="125">
    </div>
    <div>
      <label for="description" class="font-bold">Description</label>
      <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded" maxlength="255"></textarea>
    </div>
    <div>
      <button type="submit" class="bg-slate-900 hover:bg-slate-600 font-bold py-2 px-4 rounded text-white">Create task</button>
    </div>
  </form>
</section>
<?php require_once(__DIR__ . '/partials/footer.php'); ?>