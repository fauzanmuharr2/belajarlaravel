<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($pegawai as $data)
        @if ($data['jabatan'] == 'manager')
            @php $jab = 5000000; @endphp
        @elseif ($data['jabatan'] == 'sekretaris')
              @php $jab = 3500000; @endphp
        @elseif ($data['jabatan'] == 'staff')
              @php $jab = 2500000; @endphp
        @endif

        @if ($data['jam_kerja'] > 250)
        @php $bonus = 0.10 * $jab; @endphp
        @elseif ($data['jam_kerja'] > 200)
        @php $bonus = 0.05 * $jab; @endphp
        @endif

        @php $ppn = 0.025 * $jab; @endphp
        @php $gaber = ($jab + $bonus) - $ppn; @endphp
        Nama          : {{$data['nama']}}<br>
        NIP           : {{$data['nip']}}<br>
        Agama         : {{$data['agama']}}<br>
        Jabatan       : {{$data['jabatan']}}<br>
        Jam kerja     : {{$data['jam_kerja']}}<br>
        Gaji          : {{$jab}}<br>
        Bonus         : {{$bonus}}<br>
        PPN           : {{$ppn}}<br>
        GajibBersih    : {{$gaber}}<br>
        <hr>
    @endforeach
</body>
</html>
