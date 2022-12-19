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
      <div class="max-w-7xl w-full mx-auto">
        <!-- Form -->
        <div class="container h-full py-5">
          @if($errors->any())
          <div class="flex flex-col gap-4 p-8">
            @foreach ($errors -> all() as $item)
            <div class="alert alert-error bg-red-500 shadow-lg">
          
              <span class="font-bold">⚠️{{$item}}⚠️</span>
            </div>
            @endforeach
          </div>
          @endif
          <h1 class="text-center text-5xl font-bold">Form Edit Barang</h1>
        
          <form class="flex flex-col gap-4" action="{{ url('data/'.$data->kode) }}" method="post" >
            @csrf
            @method("PUT")
            <div class="flex flex-col gap-3">
              <label for="nama" class="font-serif text-lg">Kode :</label>
              {{$data->kode}}              
            </div>
          
            <div class="flex flex-col gap-3">
              <label for="nama" class="font-serif text-lg">Nama Barang :</label>
              <input type="text" name="nama" id="nama" placeholder="Type here" value="{{ $data->nama }}" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="jenis" class="font-serif text-lg">Jenis :</label>
              <input type="text" name="jenis" id="jenis" placeholder="Type here" value="{{ $data->jenis }}" class="input w-full" />
            </div>
            <div class="flex flex-col gap-3">
              <label for="stock" class="font-serif text-lg">Stock :</label>
              <input type="text" name="stock" id="stock" placeholder="Type here" value="{{ $data->stock }}" class="input w-full" />
            </div>
          
            <div class="flex flex-row gap-3 justify-end">
            <a href="{{url("data")}}" class="btn btn-secondary">KEMBALI</a>
              <button class="btn btn-primary">UPDATE</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

</body>

</html>