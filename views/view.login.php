<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../views/partials/template.navbar.php');
?>

<section class="pt-20 px-4 md:pt-44">
  <div class="flex flex-col justify-center">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
  
    <div class="bg-white mt-4 p-6 rounded-lg shadow-lg sm:mx-auto sm:w-full sm:max-w-lg">
      <form class="space-y-6" action="/config/process.users.php" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900 md:text-base">Password</label>
            <!-- <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
            </div> -->
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 md:text-base">Sign in</button>
        </div>
      </form>
  
      <!-- <div class="flex justify-center items-center my-4">
        <hr class="border-gray-200 w-1/6 sm:w-1/4">
        <p class="mx-4 text-sm font-medium leading-6 text-gray-900 md:text-base">Or continue with</p>
        <hr class="border-gray-200 w-1/6 sm:w-1/4">
      </div>
  
      <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-5 sm:justify-between">
        <button class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:w-1/2 md:text-base" disabled>
          <div class="flex justify-center items-center">
            <img src="/assets/img/google.svg" alt="Google's logo icon" class="max-h-5 mr-1">
            <span>Google</span>
          </div>
        </button>
  
        <button class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:w-1/2 md:text-base" disabled>
          <div class="flex justify-center items-center">
            <img src="/assets/img/github.svg" alt="Google's logo icon" class="max-h-5 mr-1">
            <span>GitHub</span>
          </div>
        </button>
      </div> -->
  
      <p class="mt-6 text-center text-sm text-gray-500">
        Don't have an account?
        <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register here</a>
      </p>
    </div>
  </div>
</section>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>