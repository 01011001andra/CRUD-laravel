<!doctype html>
<html data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    </script>
    @vite('resources/css/app.css')
    @laravelPWA
</head>

<body class="overflow-x-hidden">
  <div class="w-screen h-screen p-20 flex flex-col items-center justify-center">
    <div class="container mx-auto flex flex-col items-center justify-center gap-10">
      <div class="flex flex-col max-w-sm w-full p-6 rounded-md sm:p-10 dark:bg-yellow-700 dark:text-gray-100 shadow-2xl ">
        <div class="mb-8 text-center">
          <h1 class="my-3 text-4xl font-bold">Sign in</h1>
          <p class="text-sm dark:text-gray-400">Sign in to access your account</p>
        </div>
        <form novalidate="" action="" class="space-y-12 ng-untouched ng-pristine ng-valid ">
          <div class="space-y-4">
            <div>
              <label for="email" class="block mb-2 text-sm">Email address</label>
              <input type="email" name="email" id="email" placeholder="Masukkan email" class="w-full px-3 py-2 border rounded-md text-black dark:border-gray-700  dark:bg-gray-100 ">
            </div>
            <div>
              <div class="flex justify-between mb-2">
                <label for="password" class="text-sm">Password</label>
                <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-white ">Forgot password?</a>
              </div>
              <input type="password" name="password" id="password" placeholder="Masukkan Password" class="w-full px-3 py-2 border rounded-md text-black dark:border-gray-700  dark:bg-gray-100 ">
            </div>
          </div>
          <div class="space-y-2">
            <div>
              <button type="button" class="w-full h-full px-8 py-3 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"><a href="/data" class="">Sign in</a></button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</body>

</html>