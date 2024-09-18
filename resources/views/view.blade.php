<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penjumlahan</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (!$errors->any() && isset($hasil))
        <p>Hasil dari penjumlahan angka1 dan angka2 adalah: {{ $hasil }}</p>
    @endif

</body>
</html>
