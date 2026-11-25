
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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
Route::put('/profile', [DashboardController::class, 'updateProfile'])
    ->name('profile.update');
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
| AUTENTIKASI LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');
});

/*
|--------------------------------------------------------------------------
| HALAMAN YANG MEMERLUKAN LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // BERANDA SETELAH LOGIN
    Route::get('/beranda', [DashboardController::class, 'beranda'])
        ->name('beranda');

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // PROFIL SAYA
    Route::get('/profile', [DashboardController::class, 'profile'])
        ->name('profile');

    // CRUD KURSUS
    Route::resource('courses', CourseController::class);

    // ENROLLMENT
    Route::resource('enrollments', EnrollmentController::class)
        ->only(['index', 'create', 'store']);
    Route::put('/profile/password', [DashboardController::class, 'updatePassword'])
        ->name('profile.password');
});
