<?php
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\JalurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ini adalah return tanpa MVC
Route ::get('/jalurbaru', function(){
    return 'Ini jalur baru tanpa MVC';
});


// // ini adalah route menggunakan view
Route ::get('/jalurview', function(){
    return view ('viewjalur');
});

Route ::get('/jalurview', function(){
        return view ('viewjalur');
    });


// // ini adalah route menggunakan view & controller
// Route::get('/jalurcontroller', [JalurController::class, 'index']);

// // // ini adalah route menggunakan view & controller & model
// Route::get('/jalurmodel', [JalurController::class, 'MenampilkanDataModel']);

// // ini adalah route menggunakan view & controller & model
Route::get('/jalurbiodata', [BiodataController::class, 'MenampilkanBiodata']);