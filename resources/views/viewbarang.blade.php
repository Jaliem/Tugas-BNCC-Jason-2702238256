<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button type="submit" class="btn btn-primary">Keranjang</button>
@foreach ($barangs as $item)
<form action="{{ route('keranjang') }}" method="post" enctype="multipart/form-data">
    @csrf <!-- Adding CSRF token for form submission -->
    <input type="hidden" class="form-control" name="barangid" value="{{ $item->barangid }}" aria-describedby="emailHelp">
    <input type="hidden" class="form-control" name="kategori" value="{{ $item->kategori }}" aria-describedby="emailHelp">
    <input type="hidden" class="form-control" name="nama" value="{{ $item->nama }}" aria-describedby="emailHelp">
    <input type="hidden" class="form-control" name="harga" value="{{ $item->harga }}" aria-describedby="emailHelp">
    <input type="hidden" class="form-control" name="jumlah" value="{{ $item->jumlah }}" aria-describedby="emailHelp">
    <input type="hidden" class="form-control" name="fileInput" value="{{ 'public/' . $item->fileName }}" aria-describedby="emailHelp">
    <p>Barang ke {{ $item->barangid }}</p>
    <p>Kategori = {{ $item->kategori }}</p>
    <p>Nama = {{ $item->nama }}</p>
    <p>Harga = {{ $item->harga }}</p>
    <p>Jumlah = {{ $item->jumlah }}</p>
    @if ($item->fileName)
    <img src="{{ asset('public/' . $item->fileName) }}" alt="Product Image">
    @else
        <p>No Image Available</p>
    @endif
    <br>
    <button type="submit" class="btn btn-primary">Add ke keranjang</button>

@endforeach
</body>
</html>
