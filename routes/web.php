
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| HALAMAN BERANDA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| HALAMAN PENDAFTARAN
|--------------------------------------------------------------------------
*/

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

/*
|--------------------------------------------------------------------------
| PROSES PREVIEW PENDAFTARAN
|--------------------------------------------------------------------------
*/

Route::post('/pendaftaran/preview', function (Request $request) {

    $data = $request->validate([
        'nama' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'kursus' => 'required|in:Web Development,PHP Programming,Laravel Framework',
    ]);

    return view('preview-pendaftaran', compact('data'));
})->name('pendaftaran.preview');

/*
|--------------------------------------------------------------------------
| CRUD KURSUS
|--------------------------------------------------------------------------
*/

Route::resource('courses', CourseController::class);
