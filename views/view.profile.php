<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../models/dao/UserDAO.php');

$userDAO = new UserDAO($pdo);
$userData = $userDAO->verifyToken(true);
?>

<section class="text-center pt-40">
  <p class="text-base font-semibold text-indigo-600">Hey! Nice to see you here.</p>
  <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">This page is under construction</h1>
  <p class="mt-6 text-base leading-7 text-gray-600 px-8">You can still access other pages through the nav bar.</p>
  <p class="mt-6 text-xs leading-7 text-gray-600 px-8">Available pages: Login, Register, Todo, Done</p>
</section>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>