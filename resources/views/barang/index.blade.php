<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <center>Daftar</center>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $data)
                    <tr>
                        <td>{{$data->kode}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->harga}}</td>
                        <td><a href="/belanja/{{$data->id}}">show</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
</body>
</html>
