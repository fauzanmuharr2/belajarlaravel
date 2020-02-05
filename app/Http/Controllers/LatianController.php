<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatianController extends Controller
{
    public function book(){
        $book = Book::all();
        return view('book.index',compact('book'));
    }

    public function barang(){
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }
}
