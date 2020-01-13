<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{

    public function hallo1()
    {
        return "Hallo Dunia";
    }

    public function hallo2()
    {
        return "Hari ini sangat cerah";
    }

    public function hallo3()
    {
        return "Seperti biasanya hari cerah";
    }

    public function hallo4()
    {
        return "DiIndonesia sangat cerah";
    }

    public function hallo5()
    {
        return "Beda dengan negara lain";
    }

    public function hallo6()
    {
        return "Negaraku sangat cerah seperti lampu yang baru dipasang";
    }

    public function hallo7()
    {
        return "Sekian dr saya";
    }

    public function hallo8()
    {
        return "Dan";
    }

    public function hallo9()
    {
        return "Terima";
    }

    public function hallo10()
    {
        return "Kasih";
    }

        public function jeniskucing($warna)
{
  return "warna kucing kamu : " .$warna;
}
public function beli($item,$harga)
{
    if (isset($item)) {
        echo 'Anda memesan  : '.$item;
    }
    if (isset($harga)) {
     if ($harga >= 15000) {
        echo ' Ukuran Jumbo ';
    } elseif ($harga < 15000 && $harga >= 7500) {
        echo ' Ukuran medium';
    } elseif ($harga < 7500) {
        echo ' Ukuran small';
    }
}
}

}


