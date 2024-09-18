<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>
    @if(isset($hasil))
        <p>Angka 1: {{ $angka1 }}</p>
        <p>Angka 2: {{ $angka2 }}</p>
        <p>Hasil: {{ $hasil }}</p>
    @else
        <p>Pastikan kedua parameter angka1 dan angka2 adalah angka yang valid.</p>
    @endif
</body>
</html>
