<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung";
        return view('latihan', compact('a'));
    }

    public function pass1()
    {
        $data = [
        ['nama' => 'Emul',    'kelas'=>'RPL 1'],
        ['nama' => 'Ncep',    'kelas'=>'RPL 2'],
        ['nama' => 'Sugandi', 'kelas'=>'RPL 3'],
    ];
    return view('latihan1',['siswa' => $data]);
    }

    public function pass2()
    {
        $data = [
            ['nama'=>'Sugandi','nip'=>'090394834893','jabatan'=>'manager','agama'=>'Islam','jk'=>'Laki-Laki','jam_kerja'=>'250'],
            ['nama'=>'Sutarno','nip'=>'090394834894','jabatan'=>'sekretaris','agama'=>'Islam','jk'=>'Laki-Laki','jam_kerja'=>'150'],
            ['nama'=>'Sukijat','nip'=>'090394834895','jabatan'=>'staff','agama'=>'Islam','jk'=>'Laki-Laki','jam_kerja'=>'150'],

        ];
        return view('latihan2',['pegawai' => $data]);
    }
}
