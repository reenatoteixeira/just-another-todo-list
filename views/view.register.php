<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
?>

<section>
  <div class="flex flex-col justify-center md:pt-20">
    <div class="mb-2 sm:mx-auto sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold text-gray-900">Create new account</h2>
    </div>

    <div class="w-full max-w-xl bg-white mt-4 p-4 rounded-lg shadow-lg sm:mx-auto">
      <form action="/config/process.users.php" method="POST">
        <input type="hidden" name="type" value="register">
        <div class="mb-4">
          <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
          <input id="first-name" name="first-name" type="text" maxlength="100" placeholder="John" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
        </div>

        <div class="mb-4">
          <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
          <input id="last-name" name="last-name" type="text" maxlength="100" placeholder="Doe" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <input id="email" name="email" type="email" autocomplete="email" maxlength="100" placeholder="johndoe@email.com" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <input id="password" name="password" type="password" minlength="6" maxlength="25" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
        </div>

        <div class="mb-4">
          <label for="check-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
          <input id="check-password" name="check-password" type="password" minlength="6" maxlength="25" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
        </div>

        <div class="mb-4">
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Create account
          </button>
        </div>
      </form>

      <p class=" text-center text-sm text-gray-500">
        Already have an account?
        <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login here</a>
      </p>
    </div>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>