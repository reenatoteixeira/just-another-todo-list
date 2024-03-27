<?php
$heading = 'To-do tasks';
require_once './templates/header.php';
?>

<section class="max-w-5xl m-auto grid grid-cols-3 max-[767px]:grid-cols-1">
  <div class="bg-amber-200 m-2 p-4 shadow-md">
    <h2 class="font-bold">Task #1</h2>
    <hr class="border-black my-2">
    <p>Task #1 description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sed dicta quam vero laborum voluptatum facilis! Delectus porro asperiores debitis, natus, incidunt vel odit vitae quisquam, quo pariatur nisi possimus tests.</p>
    <div class="mt-2">
      <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-check-circle"></i></button>
      <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-edit"></i></button>
      <button class="bg-amber-300 hover:bg-amber-400 font-bold py-2 px-4 rounded"><i class="uil uil-trash-alt"></i></button>
    </div>
  </div>
</section>

<?php require_once './templates/footer.php' ?>