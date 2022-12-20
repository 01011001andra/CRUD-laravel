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
    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <div class="w-full mx-auto pt-12">
                <!-- Navbar -->
                <div class="w-full navbar bg-base-200 pt-10">
                  <div class="flex-none lg:hidden">
                      <label for="my-drawer-2" class="btn bg-inherit rounded-none border-none drawer-button lg:hidden w-20"> <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg></label>
                  </div>
                    <div class="flex-1">
                      </div>
                      <div class="flex-none gap-2">
                        <div class="form-control">
                          <input type="text" placeholder="Search" class="input input-bordered" />
                        </div>
                        <div class="dropdown dropdown-end">
                          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                              <img src="https://placeimg.com/80/80/people" />
                            </div>
                          </label>
                          <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                              <a>
                                Profile
                              </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                          </ul>
                        </div>
                 </div>
                </div>
            </div>
          <!-- Page content here -->
          <div class="w-full h-max bg-base-200 px-10">
              <div class="mx-auto min-h-screen max-w-7xl flex flex-wrap justify-between">
                <a href="/datas" class="w-1/2 h-48 bg-white rounded-xl flex flex-row items-center justify-center gap-5 cursor-pointer hover:bg-slate-200">
                  <h1 class="font-bold text-3xl px-10">Logo</h1>
                  <div class="w-full h-full flex items-center">
                    <h1 class="font-medium text-2xl">Data Barang</h1>
                  </div>
                </a>
              </div>
          </div>
        </div> 
        <div class="drawer-side">
          <label for="my-drawer-2" class="drawer-overlay"></label> 
          <ul class="menu p-4 w-80 bg-base-100 text-base-content">
            <h1 class="text-2xl font-bold px-4 first-letter:text-yellow-500">Inventory BaaBaa Kambing</h1>
            {{-- Avatar --}}
            <div class="avatar flex flex-col items-center justify-center py-12">
                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                  <img src="https://placeimg.com/192/192/people" />
                </div>
              </div>
            <!-- Sidebar content here -->
            <li class="font-medium bg-gray-200/80 rounded-full"><a href="#">Dashboard</a></li>
            <li class="font-medium"><a href="/datas">Data Barang</a></li>
          </ul>
        
        </div>
      </div>
    
</body>

</html>