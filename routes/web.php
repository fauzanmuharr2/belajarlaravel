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



























