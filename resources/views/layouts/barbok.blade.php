<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <nav>
            <a href="/rumah">Home</a> |
            <a href="/belanja">Barang</a> |
            <a href="/buku">Buku</a>
        </nav>
        {{-- Tempat Konten Dinamis --}}
        @yield('konten')
        {{-- Akhir Konten Dinamis--}}

        <center><footer>Smk Assalaam</footer></center>
</body>
</html>
