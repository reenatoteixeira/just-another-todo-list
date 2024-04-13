<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>JATL | <?= $heading ?></title>
</head>

<body class="h-full">
  <nav class="bg-gray-800 fixed top-0 h-16 w-full z-10" id="nav-menu">
    <div class="max-w-7xl mx-auto h-full px-4 flex items-center justify-between sm:px-6 lg:px-8">
      <div class="w-full flex items-center justify-between">
        <div class="flex items-center">
          <div>
            <a href="/" class="flex items-center text-white font-bold sm:text-lg">
              <img class="h-8 w-8 sm:h-10 sm:w-10" src="/assets/img/check.svg" alt="JATL logo"> JATL
            </a>
          </div>

          <div class="hidden ml-10 flex items-center space-x-4 md:block ">
            <a href="/" class="<?= checkUrl('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium md:text-base" aria-current="page">To-do</a>

            <a href="/done" class="<?= checkUrl('/done') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium md:text-base">Done</a>

            <a href="/about" class="<?= checkUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium md:text-base">About us</a>
          </div>
        </div>

        <div class="hidden flex space-x-2 md:block">
          <a href="/login" class="rounded-md bg-indigo-600 px-12 py-2 text-sm font-semibold text-white text-center shadow-sm hover:bg-indigo-500 md:text-base">
            <button>Login</button>
          </a>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button onclick="mobileMenuToggle()" type="button" class="rounded-md bg-gray-800 px-2 py-1 text-2xl text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <i class="uil uil-bars" id="mobile-menu-open"></i>
          <i class="uil uil-times hidden" id="mobile-menu-close"></i>
        </button>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden md:hidden bg-gray-800 rounded-b-lg" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="/" class="<?= checkUrl('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium" aria-current="page">To-do</a>

        <a href="/done" class="<?= checkUrl('/done') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">Done</a>

        <a href="/about" class="<?= checkUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">About us</a>
      </div>

      <hr class="border-gray-700">

      <div class="px-2 pb-3 pt-2 sm:px-3">
        <div class="flex flex-col items-center justify-center sm:flex-row sm:space-y-0 sm:justify-center sm:space-x-2">
          <a href="/login" class="inline-flex w-11/12 justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:w-2/4">
            <button>Login</button>
          </a>

          <hr class="border-gray-700 w-3/4 mx-auto">

          <a href="/register" class="w-11/12 justify-center rounded-md bg-white px-3 py-2 text-sm text-center font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            Register
          </a>
        </div>
      </div>
    </div>
  </nav>

  <?php require_once(__DIR__ . '/heading.php') ?>