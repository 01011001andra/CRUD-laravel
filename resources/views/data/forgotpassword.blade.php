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
  <div class="w-screen h-screen p-5 flex flex-col items-center justify-center">
    <div class="container mx-auto flex flex-col items-center justify-center gap-10">
      <div class="flex flex-col max-w-md w-full p-6 rounded-md sm:p-10 bg-slate-100 text-black shadow-2xl ">
        <div class="mb-8 text-center">
          <h1 class="my-3 text-3xl font-bold">FORGOT PASSWORD</h1>
        </div>
        <form novalidate="" action="/" class="space-y-12 ng-untouched ng-pristine ng-valid max-w-2xl">
          <div class="space-y-4">
            <div>
              <label for="email" class="block mb-2 text-sm">Email address</label>
              <input type="email" name="email" id="email" placeholder="Masukkan email" class="w-full px-3 py-2 border rounded-md text-black dark:border-gray-700  dark:bg-gray-100 ">
            </div>
            <div class="flex flex-col gap-2">
              <button class="btn btn-accent w-full rounded-none">Request</button>
            <a href="/" class="btn bg-red-600 w-full rounded-none border-none text-black hover:bg-red-700">Cancel</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</body>

</html>