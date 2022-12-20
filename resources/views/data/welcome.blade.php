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
      <div class="flex flex-col max-w-sm w-full p-6 rounded-md sm:p-10 bg-slate-100 text-black shadow-2xl ">
        <div class="mb-8 text-center">
          <h1 class="my-3 text-4xl font-bold">Sign in</h1>
          <p class="text-sm dark:text-gray-400">Sign in to access your account</p>
        </div>
        <form novalidate="" action="/dashboard" class="space-y-12 ng-untouched ng-pristine ng-valid max-w-2xl">
          <div class="space-y-4">
            <div>
              <label for="email" class="block mb-2 text-sm">Email address</label>
              <input type="email" name="email" id="email" placeholder="Masukkan email" class="w-full px-3 py-2 border rounded-md text-black dark:border-gray-700  dark:bg-gray-100 ">
            </div>
            <div>
              <div class="flex justify-between mb-2">
                <label for="password" class="text-sm">Password</label>
              </div>
              <input type="password" name="password" id="password" placeholder="Masukkan Password" class="w-full px-3 py-2 border rounded-md text-black dark:border-gray-700  dark:bg-gray-100 ">
              <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-white flex justify-end mt-2">Forgot password?</a>
            </div>
            <button class="btn btn-primary w-full ">Sign In</button>
          </div>
        </form>
      </div>
  </div>
</div>
</body>

</html>