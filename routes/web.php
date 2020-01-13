<?php



Route::get('/', function () {
    return view('welcome');
});
// Route basic
Route::get('/about', function(){
    return '<h1>Halo</h1>'
           .'Selamat Datang di webapp saya <br>'
           .'Laravel, emang keren';
});

// Route::get('/profil', function(){
//     return view('biodata');
// });

// Route::get('/profil2', function(){
//     return view('biodata2');
// });
// Route::get('/profil3', function(){
//     return view('biodata3');
// });
// Route::get('/profil4', function(){
//     return view('biodata4');
// });
// Route::get('/profil5', function(){
//     return view('biodata5');
// });

// route paramater

Route::get('/makanan/{makan}/{minum}/{krupuk}/{harga}',function($mkn,$teh,$krupuk,$hrg){
    return 'Makanan yang saya pesan adalah '.$mkn. '<br>Pesen minum ' .$teh. '<br>Sama Pesen '.$krupuk. '<br>Harganya ' .$hrg;
});

// rout optional parameter
Route::get('halo/{nama?}',function($nama='Fauzan Muharram'){
  return 'Halo Nama Saya adalah '.$nama;
});

Route::get('/pesanan/{minuman?}/{makanan?}/{harga?}',function($minuman=null,$makanan=null,$harga=null){

    if (isset($minuman)) {
        echo 'Anda Memesan : '.$minuman;
    } if (isset($makanan)) {
        echo ' & '.$makanan;
    } if (isset($harga)) {
        echo ' Harganya Rp.'.$harga;
    } if ($makanan == null & $minuman == null & $harga == null) {
        echo 'Anda memesan sesuatu';
    }
});

// MENCARI SEMUA MODEL

Route::get('/testmodel', function(){
    $query = App\Post::all();
    return $query;
});

// MENCARI MODEL SESUAI ID

Route::get('/testmodel', function(){
    $query = App\Post::find(1);
    return $query;
});

// MENCARI BERDASARKAN TITLE

Route::get('/testmodel', function(){
    $query = App\Post::where('title','like','%cepat nikah')->get();
    return $query;
});

// MENGUBAH RECORD, (HAPUS SEMUA ISI FUNCTION)

Route::get('/testmodel', function(){
    $query = App\Post::find(1);
    $query->title = "Ciri Keluarga Sakinah";
    $query->save();
    return $query;
});

// MENGHAPUS RECORD, (HAPUS SEMUA ISI FUNCTION)

Route::get('/testmodel', function(){
    $query = App\Post::find(1);
    $query->delete();
    // check di database
});

// MENAMBAH RECORD , (HAPUS SEMUA ISI FUNCTION)

Route::get('/testmodel', function(){
    $query = new App\Post;
    $query->title = "7 Amalan Pembuka Jodoh";
    $query->content = "Shalat malam, sedekah, puasa sunah, silahturahmi, senyum, doa, tobat";
    $query->save();
    return $query;
    // check record baru di database
});

Route::get('/testmodel22', function(){
    $query = App\Penggajian::all();
    return $query;
});

Route::get('/data-gaji-1', function(){
    $query = App\Penggajian::where('agama','=','islam')->get();
    return $query;
});

Route::get('/data-gaji-2', function(){
    $query = App\Penggajian::select('id','nama','agama')->where('agama','=','islam')->get();
    return $query;
});

Route::get('/data-gaji/{id}', function($id){
    $query = App\Penggajian::find($id);
    return $query;
});

Route::get('tambah-data-gaji',function(){
    $query = new App\Penggajian();
    $query->nama = 'Vania Wynne Maida';
    $query->jabatan = 'Sekertaris';
    $query->jeniskelamin = 'Perempuan';
    $query->alamat = 'Ujung Berung';
    $query->total_penggajian = '75.000.000';
    $query->agama = 'islam';
    $query->save();
    return $query;
});

    Route::get('halo1','SekolahController@hallo1');

    Route::get('halo2','SekolahController@hallo2');

    Route::get('halo3','SekolahController@hallo3');

    Route::get('halo4','SekolahController@hallo4');

    Route::get('halo5','SekolahController@hallo5');

    Route::get('halo6','SekolahController@hallo6');

    Route::get('halo7','SekolahController@hallo7');

    Route::get('halo8','SekolahController@hallo8');

    Route::get('halo9','SekolahController@hallo9');

    Route::get('halo10','SekolahController@hallo10');

    Route::get('jeniskucing/{warna}','SekolahController@jeniskucing');

    Route::get('/jeniskucing1/{warna?}',function($warna=null){

    if (isset($warna)) {
        return 'Kucing Anda Warna : '.$warna;
    } else {
        return 'Kucing Anda Warna : ';
    }
});

    Route::get('/beli/{item?}/{harga?}',function($item=null, $harga=null){

    if (isset($item)) {
        echo 'Anda memesan  : '.$item;
    }
    if (isset($harga)) {
     if ($harga >= 15000) {
        echo ' Ukuran Jumbo ';
    } elseif ($harga < 15000 && $harga >= 7500) {
        echo ' Ukuran Medium';
    } elseif ($harga < 7500) {
        echo ' Ukuran Small';
    }
}
});






