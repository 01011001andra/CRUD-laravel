<!doctype html>
<html data-theme="cupcake">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @laravelPWA
</head>

<body>
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col bg-base-200">
     
      <div class="w-full min-h-[80vh] bg-base-200 px-10">
        <!-- Form -->
        <div class="container h-full py-5 mx-auto">
          {{-- @if($errors->any())
          <div class="flex flex-col gap-4 p-8">
            @foreach ($errors -> all() as  $item)
            <div class="alert alert-error bg-red-500 shadow-lg">
              
              <span class="font-bold">⚠️{{$item}}⚠️</span>
            </div>
            @endforeach
          </div>
          @endif --}}
          <h1 class="text-center text-5xl font-bold">Form Tambah Barang</h1>
          <form class="flex flex-col gap-4" action="/datas/store" method="POST" >
            @csrf
            <div class="flex flex-col gap-3">
              <label for="nama_barang" class="font-serif text-lg">Nama Barang :</label>
              <input type="text" name="nama_barang" id="nama_barang" placeholder="Type here" class="input w-full" />
            </div>

            <div class="flex flex-col gap-3">
              <label for="kode" class="font-serif text-lg">Kode :</label>
              <input type="text" name="kode" id="kode" placeholder="Type here" class="input w-full" />
            </div>
            
            <div class="flex flex-col gap-3">
              <label for="jenis" class="font-serif text-lg">Jenis :</label>
              <input type="text" name="jenis" id="jenis" placeholder="Type here" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="stock" class="font-serif text-lg">Stock :</label>
              <input type="text" name="stock" id="stock" placeholder="Type here" class="input w-full" />
            </div>
           
            <div class="flex flex-row gap-3 justify-end">
              <a href="/datas" class="btn btn-secondary">
                Kembali
              </a>
              <button class="btn btn-primary">SUBMIT</button>
            </div>
          </form>
        
        </div>
      </div>

    </div>
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label>
      <ul class="menu p-4 w-80 bg-base-100">
        <div class="avatar flex flex-col items-center py-10 gap-6">
          <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
            <img src="https://placeimg.com/192/192/people" />
          </div>
          <h1 class="flex-1 select-none font-bold">Kelompok 3 💕</h1>

        </div>
        <!-- Sidebar content here . -->
        <li>
          <a href="/data">Data Barang</a>
        </li>
        <li>
          <a href="/data/create">Form Request Barang</a>

        </li>
      </ul>
    </div>
  </div>

</body>

</html>