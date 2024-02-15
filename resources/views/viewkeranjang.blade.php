<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($keranjangs as $item)
    <p>Barang ke {{ $item->barangid }}</p>
    <p>Kategori = {{ $item->kategori }}</p>
    <p>Nama = {{ $item->nama }}</p>
    <p>Harga = {{ $item->harga }}</p>
    <p>Jumlah = {{ $item->jumlah }}</p>
    @if ($item->fileName)
    <img src="{{ asset($item->fileName) }}" alt="Product Image">
    @else
        <p>No Image Available</p>
    @endif
    <br>
@endforeach
</body>
</html>
