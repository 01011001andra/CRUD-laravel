<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full min-h-screen bg-base-200 px-10">
        <div class="mx-auto min-h-screen max-w-7xlflex flex-col gap-6 py-5">
            <h1 class="text-center text-5xl font-bold">Data Barang</h1>
            <div class="flex justify-end">
                <!-- The button to open modal -->
                <a href="#my-modal-2" class="btn btn-primary">Tambah Data</a>
                <!-- Put this part before </body> tag -->
                <div class="modal" id="my-modal-2">
                    <div class="modal-box rounded-md">
                        <form class="flex flex-col gap-1" action="/">
                            <h1 class="text-center text-xl font-medium">Form Tambah Data</h1>
                            <div class="flex flex-col gap-2">
                                <label for="nama">No: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nomor...">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="nama">Kode: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Kode ...">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="nama">Nama Barang: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Nama Barang ...">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="nama">Jenis: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Jenis ...">
                            </div>
                            <div class="flex flex-col gap-3">
                                <label for="nama">Stock: </label>
                                <input type="text" class="bg-white px-3 h-10 rounded-md text-black" placeholder="Masukkan Stock ...">
                            </div>
                            <div class="modal-action">
                                <button>
                                    <a href="#" class="btn bg-red-600 text-white">CANCEL</a>
                                </button>
                                <button type="button">
                                    <a href="/" class="btn bg-primary text-white">SUBMIT</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <table class="table table-zebra w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th></th>
                            <th>1</th>
                            <td>Blue</td>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>
                                <div class="flex gap-3">
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-primary">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>