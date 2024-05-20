<nav class="bg-gray-800 w-full py-4 fixed top-0 z-10" id="nav-bar">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 md:flex md:space-x-8">
    <div class="flex justify-between" id="nav-logo">
      <a href="/" class="flex items-center text-white font-bold text-xl">
        <img class="h-8" src="/assets/img/check.svg" alt="JATL logo"> JATL
      </a>

      <button onclick="mobileMenuToggle()" type="button" class="rounded-md bg-gray-800 px-2 py-1 text-2xl text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 md:hidden">
        <i class="uil uil-bars" id="mobile-menu-open"></i>
        <i class="uil uil-times hidden" id="mobile-menu-close"></i>
      </button>
    </div>

    <div class="hidden bg-gray-800 pt-6 md:block md:flex md:pt-0 md:w-full md:justify-between" id="nav-menu">
      <div class="space-y-2 md:flex md:space-y-0 md:space-x-3">
        <a href="/" class="<?= checkUrl('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">Home</a>

        <?php if ($userData) : ?>
          <a href="/todo" class="<?= checkUrl('/todo') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">To-do</a>

          <a href="/done" class="<?= checkUrl('/done') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">Done</a>
        <?php endif; ?>

        <a href="/about" class="<?= checkUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">About us</a>
      </div>

      <hr class="border-gray-700 my-4">

      <?php if ($userData) : ?>
        <div class="space-y-2 md:flex md:space-y-0 md:space-x-3">
          <a href="/profile" class="<?= checkUrl('/profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
            My profile
          </a>

          <a href="/logout" class="<?= checkUrl('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> block rounded-md px-3 py-2 text-base font-medium">
            Logout <i class="uil uil-signout"></i>
          </a>
        </div>

      <?php else : ?>
        <div class="flex flex-col items-center sm:flex-row sm:space-x-3">

          <a href="/login" class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm text-center font-semibold text-white shadow-sm hover:bg-indigo-500 md:w-32">
            <button>Login</button>
          </a>
          <hr class="border-gray-700 w-3/4 my-2 sm:hidden">
          <a href="/register" class="w-full rounded-md bg-white px-3 py-2 text-sm text-center font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 md:w-32">
            <button>Register</button>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </div>
  </div>
  </div>
</nav>