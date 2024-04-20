<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../views/partials/template.navbar.php');
?>

<section class="pt-20 px-4 md:pt-44">
  <div class="flex flex-col justify-center">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create new account</h2>
    </div>

    <div class="bg-white mt-4 p-6 rounded-lg shadow-lg sm:mx-auto sm:w-full sm:max-w-lg">
      <form class="space-y-6" action="/config/process.users.php" method="POST">
        <div>
          <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">First name</label>
          <div class="mt-2">
            <input id="first-name" name="first-name" type="text" maxlength="100" placeholder="John" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>

        <div>
          <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Last name</label>
          <div class="mt-2">
            <input id="last-name" name="last-name" type="text" maxlength="100" placeholder="Doe" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" maxlength="100" placeholder="johndoe@email.com" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Password</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" minlength="6" maxlength="25" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="check-password" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Confirm password</label>
          </div>
          <div class="mt-2">
            <input id="check-password" name="check-password" type="password" minlength="6" maxlength="25" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 md:text-base">
            Create account
          </button>
        </div>
      </form>

      <p class="mt-6 text-center text-sm text-gray-500">
        Already have an account?
        <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login here</a>
      </p>
    </div>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>