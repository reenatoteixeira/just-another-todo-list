<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>JATL - Just Another To-do List</title>
</head>

<body class="bg-slate-100">
  <header class="w-full fixed top-0 left-0 bg-slate-900 shadow-md">
    <nav class="flex justify-between items-center h-16 max-w-5xl m-auto px-10">
      <a href="/" class="text-white font-bold text-3xl flex items-center">
        <img src="/assets/img/check.svg" alt="List icon" class="text-white h-12"> JATL
      </a>
      <i class="min-[767px]:hidden uil uil-bars text-white text-3xl hover:cursor-pointer" id="navToggle"></i>
      <i class="min-[767px]:hidden uil uil-times text-white text-3xl hover:cursor-pointer hidden" id="navClose"></i>

      <div class="max-[767px]:fixed max-[767px]:-top-full max-[767px]:left-0 max-[767px]:w-full max-[767px]:mt-16 max-[767px]:px-10 max-[767px]:py-1 max-[767px]:shadow-md max-[767px]:rounded-b-lg max-[767px]:bg-slate-700" id="navMenu">
        <ul class="min-[767px]:flex text-center">
          <li class="min-[767px]:mx-2 my-2">
            <a href="/" class="<?= checkUrl('/') ? 'text-white font-bold' : 'text-slate-300' ?> hover:text-slate-100">
              <i class="uil uil-file"></i> To-do tasks
            </a>
          </li>
          <hr>
          <li class="min-[767px]:mx-2 my-2">
            <a href="/done.php" class="<?= checkUrl('/done.php') ? 'text-white font-bold' : 'text-slate-300' ?> hover:text-slate-100">
              <i class="uil uil-file-check"></i> Done tasks
            </a>
          </li>
          <hr>
          <li class="min-[767px]:mx-2 my-2">
            <a href="/about.php" class="<?= checkUrl('/about.php') ? 'text-white font-bold' : 'text-slate-300' ?> hover:text-slate-100">
              <i class="uil uil-question-circle"></i> About us
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <?php require_once(__DIR__ . '/heading.php') ?>
  </header>
  <main class="mt-32">