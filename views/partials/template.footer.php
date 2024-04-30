<?php
require_once(__DIR__ . '/modal.new-task.php');
require_once(__DIR__ . '/modal.edit-task.php');
require_once(__DIR__ . '/modal.delete-task.php');
?>

</main>

<footer class="absolute bottom-0 w-full h-20 flex items-center justify-center">
  <div class="text-center text-slate-400">
    <p>JATL - Just Another Todo List</p>
    <p>&copy; <?= date("Y") ?>, Renato Teixeira</p>
  </div>
</footer>

<script src="./assets/js/main.js"></script>
</body>

</html>