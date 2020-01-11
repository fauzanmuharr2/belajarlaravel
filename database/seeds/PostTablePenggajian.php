<?php

use Illuminate\Database\Seeder;

class PostTablePenggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['nama'=>'Fauzan Muharram', 'jabatan'=>'Bigboss','jeniskelamin'=>'Pria','alamat'=>'GBA','agama'=>'Islam','total_penggajian'=>'Rp.100.000.000'],
        ['nama'=>'Vania Wynne Maida', 'jabatan'=>'Manager','jeniskelamin'=>'Perempuan','alamat'=>'ujungberung','agama'=>'Islam','total_penggajian'=>'Rp.75.000.000'],
        ['nama'=>'Yanto Sriwijaya', 'jabatan'=>'Karyawan','jeniskelamin'=>'Pria','alamat'=>'Ciwastra','agama'=>'Buddha','total_penggajian'=>'Rp.3.000.000'],
        ['nama'=>'Sueb Asgar', 'jabatan'=>'Karyawan','jeniskelamin'=>'Pria','alamat'=>'Sripohaci','agama'=>'Kristen Katolak','total_penggajian'=>'Rp.3.000.000'],
        ['nama'=>'Sriwiyanto', 'jabatan'=>'Karyawan','jeniskelamin'=>'Pria','alamat'=>'JL BKR','agama'=>'Kristen ortodok','total_penggajian'=>'Rp.3.000.000']

];
DB::table('penggajians')->insert($posts);

    }
}
